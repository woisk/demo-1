<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeTitle
 */
class HomeTitle extends Model
{
    protected $table = 'home_title';

    public $timestamps = true;

    protected $fillable = [
        'logo',
        'descript',
        'home_name_id',
        'home_class_id'
    ];

    protected $guarded = [];

        
}