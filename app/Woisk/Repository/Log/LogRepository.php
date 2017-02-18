<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/13 0013
 * Time: 11:28
 */

namespace App\Woisk\Repository\Log;


use App\Woisk\Models\AccountLoginLog;
use App\Woisk\Models\AccountSignupLog;
use Carbon\Carbon;

class LogRepository
{

    /**
     * 注册记录
     * @param $account
     * @param $terminal
     * @return mixed
     */
    public function signupAccount($account,$terminal)
    {
        return AccountSignupLog::create([
            'uid' => $account->uid,
            'time' => Carbon::now(),
            'com_ip_id' => $terminal['ip']->id,
            'com_terminal_id' => $terminal['terminal']->id,
            'com_browser_id' => $terminal['browser']->id
        ]);
    }

    /**
     * 登录记录
     * @param $uid
     * @param $login_name
     * @param $terminal
     * @return mixed
     */
    public function login($uid,$login_name,$terminal)
    {
        return AccountLoginLog::create([
            'uid'=>$uid,
            'time'=> Carbon::now(),
            'type'=>$login_name,
            'com_ip_id' => $terminal['ip']->id,
            'com_terminal_id' => $terminal['terminal']->id,
            'com_browser_id' => $terminal['browser']->id
        ]);
    }


}