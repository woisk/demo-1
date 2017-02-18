<?php
namespace App\Http\Controllers\Api\Terminal;
use App\Http\Controllers\Api\BaseController;
use App\Woisk\Service\Terminal\TerminalSrevice;
use Illuminate\Http\Request;
//use League\Fractal\TransformerAbstract;


/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/2/18 0018
 * Time: 9:59
 */
class TerminalController extends BaseController
{
    protected $service;
    public function __construct(TerminalSrevice $srevice)
    {
        $this->service =$srevice;
    }


    public function getTerminal(Request $request)
    {
        return $this->service->terminal($request);
    }
}