<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserZodiac
 */
class UserZodiac extends Model
{
    protected $table = 'user_zodiac';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}