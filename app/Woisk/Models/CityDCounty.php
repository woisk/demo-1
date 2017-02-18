<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CityDCounty
 */
class CityDCounty extends Model
{
    protected $table = 'city_d_county';

    public $timestamps = false;

    protected $fillable = [
        'city_id',
        'county_id',
        'county_name'
    ];

    protected $guarded = [];

        
}