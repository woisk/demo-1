<?php
namespace App\Http\Controllers\Api\Password;
use App\Http\Controllers\Api\BaseController;
use App\Woisk\Service\Account\PasswordService;
use Illuminate\Http\Request;


/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/18 0018
 * Time: 13:15
 */
class PasswordController extends BaseController
{
    protected  $service;
    public function __construct(PasswordService $service)
    {
        $this->service =$service;
    }

    /**
     * 修改指定账号密码
     * @param Request $request
     * @return $this|\Illuminate\Http\JsonResponse
     */
    public function upPassword(Request $request)
    {
        return $this->service->upPassword($request);
    }

    /**
     * 找回密码
     * @param Request $request
     * @return $this|\Illuminate\Http\JsonResponse
     */
    public function backPassword(Request $request)
    {
        return $this->service->backPassword($request);
    }

    /**
     * 找回密码验证
     * @param Request $request
     * @return $this|\Illuminate\Http\JsonResponse
     */
    public function authBackEmail(Request $request)
    {
        return $this->service->authBackEmail($request);
    }



}