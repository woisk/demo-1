<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserPlace
 */
class UserPlace extends Model
{
    protected $table = 'user_place';

    public $timestamps = false;

    protected $fillable = [
        'com_city_id',
        'address',
        'state',
        'uid'
    ];

    protected $guarded = [];

        
}