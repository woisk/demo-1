<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccountSignupLog
 */
class AccountSignupLog extends Model
{
    protected $table = 'account_signup_log';

    public $timestamps = false;

    protected $fillable = [
        'uid',
        'time',
        'com_ip_id',
        'com_terminal_id',
        'com_browser_id'
    ];

    protected $guarded = [];

        
}