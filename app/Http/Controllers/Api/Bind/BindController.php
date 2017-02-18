<?php
namespace App\Http\Controllers\Api\Bind;

use App\Http\Controllers\Api\BaseController;
use App\Woisk\Service\Email\EmailService;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/14 0014
 * Time: 15:39
 */
class BindController extends BaseController
{
    protected $service;

    /**
     * BindController constructor.
     * @param EmailService $service
     */
    public function __construct(EmailService $service)
    {
        $this->service = $service;
    }

    /**
     * 绑定邮箱或手机
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        return $this->service->bind($request);
    }


    public function authEmail(Request $request)
    {
        return $this->service->authEmail($request);
    }



}