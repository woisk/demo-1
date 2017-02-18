<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/8 0008
 * Time: 10:49
 */

namespace App\Woisk\Repository\Terminal;


use App\Woisk\Models\ComBrowser;
use Agent;

class BrowserRepository
{
    protected $browser;
    public function __construct(ComBrowser $browser)
    {
        $this->browser =$browser;
    }

    /**
     * 创建或取出浏览器信息
     * @param $request
     * @return mixed
     */
    public function firstOrCreate($request)
    {
        $browser = ComBrowser::firstOrCreate([
            'kernel' => Agent::device(),
            'browser' =>Agent::browser(),
            'version' =>Agent::version(Agent::browser())
        ]);
        $browser->count += 1;
        $browser->save();
        return $browser;
    }
    /**
     * 获取浏览器信息
     * @param $request
     * @return array
     */
    public function browser($request)
    {
        return $browser =[
            'kernel'=> Agent::device(),
            'browser'=> Agent::browser(),
            'version'=> Agent::version(Agent::browser())
        ];

    }

}