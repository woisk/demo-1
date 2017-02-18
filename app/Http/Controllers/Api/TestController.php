<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/18 0018
 * Time: 11:35
 */

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;

class TestController    extends BaseController
{
    public function test(Request $request)
    {
        dd($request);
    }
}