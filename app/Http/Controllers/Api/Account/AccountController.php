<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/13 0013
 * Time: 10:25
 */

namespace App\Http\Controllers\Api\Account;


use App\Http\Controllers\Api\BaseController;
use App\Woisk\Service\Account\AccountService;
use Illuminate\Http\Request;

class AccountController extends BaseController
{
    protected $service;

    /**
     * 账号服务逻辑层
     * AccountController constructor.
     * @param AccountService $service
     */
    public function __construct(AccountService $service)
    {
        $this->service = $service;
    }

    /**
     * 注册账号
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function signupAccount(Request $request)
    {
        return $this->service->signupAccount($request);
    }

    /**
     * 登录账号
     * @param Request $request
     * @return $this
     */
    public function login(Request $request)
    {
        return $this->service->login($request);
    }

    public function restePassword(Request $request)
    {
        return $this->service->login($request);

    }
    /**
     * 获取token用户信息
     * @param Request $request
     * @return $this
     */
    public function getAuthenticatedUser(Request $request)
    {
        return $this->service->getAuthenticatedUser($request);
    }

    /**
     * 刷新Token
     * @param Request $request
     * @return mixed
     */
    public function refreshToken(Request $request)
    {
        return $this->service->refreshToken($request);
    }

}