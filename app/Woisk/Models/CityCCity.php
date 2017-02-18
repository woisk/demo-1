<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CityCCity
 */
class CityCCity extends Model
{
    protected $table = 'city_c_city';

    public $timestamps = false;

    protected $fillable = [
        'province_id',
        'city_id',
        'city_name'
    ];

    protected $guarded = [];

        
}