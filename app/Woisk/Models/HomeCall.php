<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeCall
 */
class HomeCall extends Model
{
    protected $table = 'home_call';

    public $timestamps = false;

    protected $fillable = [
        'com_call_id',
        'home_call_com_job_id',
        'home_call_com_effect_id',
        'home_info_id'
    ];

    protected $guarded = [];

        
}