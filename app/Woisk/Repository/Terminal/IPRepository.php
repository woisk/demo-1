<?php
namespace App\Woisk\Repository\Terminal;

use App\Woisk\Models\ComIp;
use Ip;

/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/8 0008
 * Time: 10:04
 */
class IPRepository
{
    protected $ip;

    public function __construct(ComIp $ip)
    {
        $this->ip = $ip;
    }

    /**
     * IP归属地转换字符串存入数据表
     * @param $ipg
     * @return string
     */
    public function getIpGui($ipg)
    {

        if ($ipg['0'] == $ipg['1']) {
            return $ipg['0'];
        }
        return implode($ipg);
    }

    /**
     * IP组归属地址
     * @param $ip
     * @return \Illuminate\Http\JsonResponse
     */
    public function numberIp($ip)
    {
        return response()->json([
            $ip => Ip::find($ip)
        ]);
    }

    /**
     * 客户端IP地址归属地
     * @param $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function clientIp($request)
    {
        return response()->json([
            $request->getClientIp() => Ip::find($request->getClientIp())
        ]);
    }

    /**
     * 创建或取出IP记录
     * @param \Request $request
     * @return static
     */
    public function firstOrCreate($request)
    {
        $ip = $this->ip->firstOrCreate([
            'ip' => $request->getClientIp(),
            'city' => $this->getIpGui(Ip::find($request->getClientIp()))
        ]);
        $ip->count += 1;
        $ip->save();
        return $ip;
    }


}