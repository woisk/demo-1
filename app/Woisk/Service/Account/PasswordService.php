<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/18 0018
 * Time: 13:20
 */

namespace App\Woisk\Service\Account;


use App\Mail\BackPassword;
use App\Woisk\Repository\Account\AccountRepository;
use App\Woisk\Validation\AccountValidation;

class PasswordService
{
    protected $account;
    protected $validation;

    public function __construct(AccountRepository $account, AccountValidation $validation)
    {
        $this->account = $account;
        $this->validation = $validation;
    }

    /**
     * 修改制定账号密码
     * @param $request
     * @return $this|\Illuminate\Http\JsonResponse
     */
    public function upPassword($request)
    {
        $validation = $this->validation->upPassword($request);
        if ($validation->fails()) {
            return response()->json($validation->messages())->setStatusCode(422);
        }

        $uid = \JWTAuth::parseToken()->toUser()->uid;

        if ($this->account->upPassword($uid, $request)) {
            return response()->json('密码修改成功！');
        }
    }

    public function backPassword($request)
    {
        if ($request->has('email')) {
            if (!empty($account = $this->account->firstAccount('email', $request->get('email')))) {
                return $this->sendBackPasswordEmail($request,$account);
            }
            return response()->json('邮箱不存在！')->setStatusCode(422);
        }

        if ($request->has('mobile')) {
            if (!empty($this->account->firstAccount('mobile', $request->get('mobile')))) {
                return $this->sendBackPasswordMobile($request);
            }
            return response()->json('手机号不存在！')->setStatusCode(422);
        }
    }

    /**
     * 发送重置密码邮件
     */
    public function sendBackPasswordEmail($request,$account)
    {
        $payload = \JWTFactory::sub($account->uid)
            ->email($request->get('email'))
            ->setTTL(60 * 2)
            ->make();
        $token = \JWTAuth::encode($payload);

        $date = [
            'uid' => $account->uid,
            'username' => $account->username,
            'email' => $request->get('email'),
            'token' => $token
        ];

        if (empty(\Mail::to($request->get('email'))->send(new BackPassword($date)))) {
            return response()->json('重置密码邮件发送成功');
        }

    }

    /**
     * 发送重置密码短信
     */
    public function sendBackPasswordMobile($request)
    {
        return response()->json('此功能暂未开通！');
    }


    public function authBackEmail($request)
    {
        $newtoken = \JWTAuth::refresh();
        return response()->json('true')->cookie('token',$newtoken);
    }

}