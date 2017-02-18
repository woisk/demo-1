<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeCallComJob
 */
class HomeCallComJob extends Model
{
    protected $table = 'home_call_com_job';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}