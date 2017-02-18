<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComSnsIspInfo
 */
class ComSnsIspInfo extends Model
{
    protected $table = 'com_sns_isp_info';

    public $timestamps = false;

    protected $fillable = [
        'isp',
        'isp_name',
        'ico',
        'isp_url',
        'state',
        'count'
    ];

    protected $guarded = [];

        
}