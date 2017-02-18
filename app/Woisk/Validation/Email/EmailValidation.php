<?php
namespace App\Woisk\Validation\Email;
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/14 0014
 * Time: 15:40
 */
class EmailValidation
{
    public function authEmail($request)
    {
        return $validator = \Validator::make($request->all(), [
            'email' =>'required|email|unique:account'
        ]);
    }

    public function bindAuthEmail($request)
    {
        return $validator = \Validator::make($request->all(), [
            'code' =>'required'
        ]);
    }
}