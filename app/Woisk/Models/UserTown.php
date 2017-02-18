<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserTown
 */
class UserTown extends Model
{
    protected $table = 'user_town';

    public $timestamps = false;

    protected $fillable = [
        'com_city_id',
        'address',
        'uid'
    ];

    protected $guarded = [];

        
}