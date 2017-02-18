<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeClass
 */
class HomeClass extends Model
{
    protected $table = 'home_class';

    public $timestamps = false;

    protected $fillable = [
        'count'
    ];

    protected $guarded = [];

        
}