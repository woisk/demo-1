<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComCall
 */
class ComCall extends Model
{
    protected $table = 'com_call';

    public $timestamps = false;

    protected $fillable = [
        'number',
        'count',
        'com_call_isp_info_id'
    ];

    protected $guarded = [];

        
}