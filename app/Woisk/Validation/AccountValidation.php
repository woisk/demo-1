<?php
namespace App\Woisk\Validation;
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/13 0013
 * Time: 10:46
 */
class AccountValidation
{
    public function accountCreate($request)
    {
        return $validator = \Validator::make($request->all(), [
            //用户名可以中文数字英语字母，不能以数字开头
            'username' =>
                array('required','min:2','max:20',
                    'regex:/^[a-zA-Z\x{4e00}-\x{9fa5}][-A-Za-z0-9_\x{4e00}-\x{9fa5}]+$/u',
                    'unique:account'
                ),
            //密码区分大小写
            'password' => 'required|min:6',
        ]);
    }

    public function accountLogin($request)
    {
        return $validator = \Validator::make($request->all(), [
            //登陆名 用户名 、uid、邮箱、
            'login_name' =>'required',
            //密码区分大小写
            'password' => 'required|min:6',
        ]);
    }

    public function upPassword($request)
    {
        return $validator = \Validator::make($request->all(), [
            //密码区分大小写
            'password' => 'required|min:6',
        ]);
    }


}