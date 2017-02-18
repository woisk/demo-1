<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccountLoginLog
 */
class AccountLoginLog extends Model
{
    protected $table = 'account_login_log';

    public $timestamps = false;

    protected $fillable = [
        'uid',
        'time',
        'type',
        'com_terminal_id',
        'com_ip_id',
        'com_browser_id'
    ];

    protected $guarded = [];

        
}