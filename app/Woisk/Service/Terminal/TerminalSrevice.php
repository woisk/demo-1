<?php
namespace App\Woisk\Service\Terminal;

use App\Woisk\Repository\Terminal\BrowserRepository;
use App\Woisk\Repository\Terminal\IPRepository;
use App\Woisk\Repository\Terminal\TerminalRepository;

/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/18 0018
 * Time: 9:36
 */
class TerminalSrevice
{
    protected $browser, $ip, $terminal;

    public function __construct(BrowserRepository $browser, IPRepository $ip, TerminalRepository $terminal)
    {
        $this->ip = $ip;
        $this->browser = $browser;
        $this->terminal = $terminal;
    }

    /**
     * @return BrowserRepository
     */
    public function getBrowser($request)
    {
        return $this->browser->firstOrCreate($request);
    }

    /**
     * @return IPRepository
     */
    public function getIp($request)
    {
        return $this->ip->firstOrCreate($request);
    }

    /**
     * @return TerminalRepository
     */
    public function getTerminal($request)
    {
        return $this->terminal->firstOrCreate($request);
    }

    /**
     * 终端集合
     * @return array
     */
    public function terminal($request)
    {
        return $terminal = [
            'ip' => $this->getIp($request),
            'browser' => $this->getBrowser($request),
            'terminal' => $this->getTerminal($request)
        ];
    }


}