<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/8 0008
 * Time: 11:34
 */

namespace App\Woisk\Repository\Terminal;


use App\Woisk\Models\ComTerminal;
use Agent;

class TerminalRepository
{
    protected $terminal;

    public function __construct(ComTerminal $terminal)
    {
        $this->terminal = $terminal;
    }

    /**
     * 获取终端信息
     * @param $request
     * @return array
     */
    public function terminal($request)
    {
        return [
            'type' => $this->isTerminal(),
            'os' => Agent::platform(),
            'version' => Agent::version(Agent::platform()),
        ];
    }

    /**
     * 判断终端类型
     * @return string
     */
    public function isTerminal()
    {

        if (Agent::isMobile()) {

            return '移动设备';

        } elseif (Agent::isTablet()) {

            return '平板设备';

        } elseif (Agent::isDesktop()) {

            return '桌面设备';

        }
    }

    /**
     * 创建或取出终端记录
     * @param $request
     * @return mixed
     */
    public function firstOrCreate($request)
    {
        $terminal = ComTerminal::firstOrCreate([
            'type' => $this->isTerminal(),
            'os' => Agent::platform(),
            'version' => Agent::version(Agent::platform()),
        ]);
        $terminal->count += 1;
        $terminal->save();
        return $terminal;
    }
}