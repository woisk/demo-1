<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeSnsComJob
 */
class HomeSnsComJob extends Model
{
    protected $table = 'home_sns_com_job';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}