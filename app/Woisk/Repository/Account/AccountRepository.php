<?php
namespace App\Woisk\Repository\Account;

use App\Woisk\Models\Account;

/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/18 0018
 * Time: 9:04
 */
class AccountRepository
{
    /**
     * 登录名判断
     * 参数 login_name  $filter
     *
     * return $filter
     */
    public function GetFilter($filter)
    {
        $login = $filter;
        if (filter_var($login, FILTER_VALIDATE_INT)) {

            return 'uid';

        } elseif (filter_var($login, FILTER_VALIDATE_EMAIL)) {

            return 'email';

        }
        return 'username';

    }
    /**
     * 创建账号
     * @param $request
     * @return account
     */
    public function create($request)
    {
        return Account::create([
            'username' => $request->get('username'),
            'password' => bcrypt($request->get('password'))
        ]);
    }

    /**
     * 检查用户名或邮箱或手机账号是否存在
     * @param $request
     * @return username or email or mobile
     */
    public function checkUsernamneOrEmailOrMobile($request)
    {
        $login_name = $this->GetFilter($request->get('login_name'));
        if ($request->has('login_name')) {
            return Account::where($login_name, $request->get('login_name'))->first();
        }
    }

    /**
     * 登录次数统计
     * @param $uid
     */
    public function loginCount($uid)
    {
        $account = Account::find($uid);
        $account->login_count += 1;
        $account->save();

    }

    public function firstAccount($type,$param)
    {
        return Account::where($type,$param)->first();
    }

    /**
     * 更新邮箱号到账号表
     * @param $uid
     * @param $email
     * @return mixed
     */
    public function upAccountEmail($uid,$email)
    {
        return Account::find($uid)->update(['email' => $email]);
    }
    /**
     * 修改指定账号密码
     * @param $uid
     * @param $request
     * @return mixed
     */
    public function upPassword($uid, $request)
    {

        return Account::find($uid)->update(['password' => bcrypt($request->get('password'))]);
    }

}