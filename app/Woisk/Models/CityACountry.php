<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CityACountry
 */
class CityACountry extends Model
{
    protected $table = 'city_a_country';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'code'
    ];

    protected $guarded = [];

        
}