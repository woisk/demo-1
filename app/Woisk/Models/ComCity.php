<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComCity
 */
class ComCity extends Model
{
    protected $table = 'com_city';

    public $timestamps = false;

    protected $fillable = [
        'conutry_id',
        'country',
        'prcvince_id',
        'prcvince',
        'city_id',
        'city',
        'county_id',
        'county',
        'town_id',
        'town',
        'village_id',
        'village',
        'count'
    ];

    protected $guarded = [];

        
}