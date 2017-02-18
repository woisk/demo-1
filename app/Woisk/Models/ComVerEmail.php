<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComVerEmail
 */
class ComVerEmail extends Model
{
    protected $table = 'com_ver_email';

    public $timestamps = false;

    protected $fillable = [
        'uid',
        'email',
        'code',
        'send_time',
        'exp_time',
        'state'
    ];

    protected $guarded = [];

        
}