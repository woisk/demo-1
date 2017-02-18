<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeCallComEffect
 */
class HomeCallComEffect extends Model
{
    protected $table = 'home_call_com_effect';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}