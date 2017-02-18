<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeSnsComEffect
 */
class HomeSnsComEffect extends Model
{
    protected $table = 'home_sns_com_effect';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}