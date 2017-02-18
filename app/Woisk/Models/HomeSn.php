<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeSn
 */
class HomeSn extends Model
{
    protected $table = 'home_sns';

    public $timestamps = false;

    protected $fillable = [
        'com_sns_id',
        'state',
        'home_sns_com_job_id',
        'home_sns_com_effect_id',
        'home_info_id'
    ];

    protected $guarded = [];

        
}