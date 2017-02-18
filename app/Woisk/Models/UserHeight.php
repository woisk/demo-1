<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserHeight
 */
class UserHeight extends Model
{
    protected $table = 'user_height';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}