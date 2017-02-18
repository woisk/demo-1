<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CityBProvice
 */
class CityBProvice extends Model
{
    protected $table = 'city_b_provice';

    public $timestamps = false;

    protected $fillable = [
        'provice_id',
        'provice_name'
    ];

    protected $guarded = [];

        
}