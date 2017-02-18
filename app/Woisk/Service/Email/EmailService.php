<?php
namespace App\Woisk\Service\Email;

use App\Mail\BindEmail;
use App\Woisk\Repository\Account\AccountRepository;
use App\Woisk\Validation\Email\EmailValidation;

/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/18 0018
 * Time: 12:45
 */
class EmailService
{
    protected $validation;

    public function __construct(EmailValidation $validation)
    {
        $this->validation = $validation;
    }

    public function bind($request)
    {
        if ($request->has('email')) {
            $validation = $this->validation->authEmail($request);
            if ($validation->fails()) {
                return response()->json($validation->messages())->setStatusCode(422);
            }
            return $this->sendEmail($request);
        }

        if ($request->has('mobile')) {
            return $this->sendMobile($request);
        }

    }

    /**
     * 发送绑定邮箱
     * @param $request
     * @return mixed
     */
    public function sendEmail($request)
    {
        $payload = \JWTFactory::sub(\JWTAuth::parseToken()->toUser()->uid)
            ->email($request->get('email'))
            ->setTTL(60 * 48)
            ->make();
        $token = \JWTAuth::encode($payload);

        $date = [
            'uid' => \JWTAuth::parseToken()->toUser()->uid,
            'username' => \JWTAuth::parseToken()->toUser()->username,
            'email' => $request->get('email'),
            'token' => $token
        ];

        if (empty(\Mail::to($request->get('email'))->send(new BindEmail($date)))) {
            return response()->json('绑定邮箱邮件发送成功');
        }
    }

    //手机验证码
    public function sendMobile($request)
    {

    }

    /**
     * 验证邮箱提交过来的token
     * @param $request
     * @return $this
     */
    public function authEmail($request)
    {
        $uid = \JWTAuth::parseToken()->toUser()->uid;
        $email = \JWTAuth::getPayload()->get('email');
        $account = new AccountRepository();
        if ($account->upAccountEmail($uid, $email)) {
            \JWTAuth::invalidate();
            return response('true')->setStatusCode(200);
        }
    }
}