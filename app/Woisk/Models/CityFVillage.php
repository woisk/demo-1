<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CityFVillage
 */
class CityFVillage extends Model
{
    protected $table = 'city_f_village';

    public $timestamps = false;

    protected $fillable = [
        'town_id',
        'village_id',
        'village_name'
    ];

    protected $guarded = [];

        
}