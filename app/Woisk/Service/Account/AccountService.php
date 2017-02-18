<?php
namespace App\Woisk\Service\Account;

use App\Woisk\Repository\Account\AccountRepository;
use App\Woisk\Repository\Log\LogRepository;
use App\Woisk\Service\Terminal\TerminalSrevice;
use App\Woisk\Validation\AccountValidation;

/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/18 0018
 * Time: 9:18
 */
class AccountService
{
    protected $validation;
    protected $accountRe;
    protected $terminalSer;
    protected $log;

    public function __construct(AccountValidation $validation,
                                AccountRepository $account,
                                TerminalSrevice $terminalSrevice,
                                LogRepository $log)
    {
        $this->accountRe = $account;
        $this->validation = $validation;
        $this->terminalSer = $terminalSrevice;
        $this->log = $log;
    }

    /**
     * 注册账号
     * @param $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function signupAccount($request)
    {

        //验证请求参数
        $validation = $this->validation->accountCreate($request);
        if ($validation->fails()) {
            return response($validation->messages())->setStatusCode(422);
        }

        //保存账号密码
        $account = $this->accountRe->create($request);

        //终端信息
        $terminal = $this->terminalSer->terminal($request);

        //注册记录
        $this->log->signupAccount($account, $terminal);
        //重定向到登录

        return redirect()->route('account.login', [
            'login_name' => $request->get('username'),
            'password' => $request->get('password')
        ]);
    }

    public function login($request)
    {
        //验证请求参数
        $validation = $this->validation->accountLogin($request);
        if ($validation->fails()) {
            return response($validation->messages())->setStatusCode(422);
        }

        //检查用户名是否存在
        $user = $this->accountRe->checkUsernamneOrEmailOrMobile($request);
        if (empty($user)) {
            return response()->json('账号不存在！')->setStatusCode(422);
        }

        //检查账号状态
        if ($user->state != 1) {
            return response()->json('账号已停用、请联系管理员')->setStatusCode(422);
        }

        //登录失败次数
//        if ($request->cookie('mpd') >= 5) {
//            return response()->json('密码错误次数过多，请30分钟后再试！')->setStatusCode(422);
//        }
        //            if ($request->cookie('mpd') == '') {
//                return response()->json('密码错误！')->setStatusCode(422)->cookie('mpd', 1);
//            } elseif ($request->cookie('mpd') != '') {
//                return response()->json('密码错误！')->setStatusCode(422)->cookie('mpd', $request->cookie('mpd') + 1);
//            }

        //密码是否正确
        if (!\Hash::check($request->get('password'), $user->password)) {
            return response()->json('密码错误！')->setStatusCode(422);
        }

        //终端信息
        $terminal = $this->terminalSer->terminal($request);

        //注册记录
        $this->log->login($user->uid, $this->accountRe->GetFilter($request->get('login_name')), $terminal);

        //登录次数统计
        $this->accountRe->loginCount($user->uid);

        //token
        $token = \JWTAuth::fromUser($user);

        //登录成功返回信息并设置cookie
        return response()->json(['token' => $token, 'username' => $user->username, 'uid' => $user->uid])
            ->cookie('token', $token)
            ->cookie('username', $user->username)
            ->cookie('uid', $user->uid)
            ->cookie('login_state', 1);
    }

    /**
     * 获取token包含的信息
     * @param $request
     * @return mixed
     */
    public function getAuthenticatedUser($request)
    {
        $token = \JWTAuth::parseToken()->authenticate();
        return response()->json($token);
    }


    public function refreshToken($request)
    {
        $token = \JWTAuth::refresh();
        return response()->json($token);
    }
}