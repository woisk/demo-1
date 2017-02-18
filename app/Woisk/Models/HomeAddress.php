<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeAddress
 */
class HomeAddress extends Model
{
    protected $table = 'home_address';

    public $timestamps = false;

    protected $fillable = [
        'com_city_id',
        'address',
        'home_info_id'
    ];

    protected $guarded = [];

        
}