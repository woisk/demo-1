<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserAge
 */
class UserAge extends Model
{
    protected $table = 'user_age';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}