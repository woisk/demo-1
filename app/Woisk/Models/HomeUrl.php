<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeUrl
 */
class HomeUrl extends Model
{
    protected $table = 'home_url';

    public $timestamps = false;

    protected $fillable = [
        'com_url_id',
        'home_info_id'
    ];

    protected $guarded = [];

        
}