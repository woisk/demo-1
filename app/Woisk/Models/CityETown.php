<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CityETown
 */
class CityETown extends Model
{
    protected $table = 'city_e_town';

    public $timestamps = false;

    protected $fillable = [
        'county_id',
        'town_id',
        'town_name'
    ];

    protected $guarded = [];

        
}