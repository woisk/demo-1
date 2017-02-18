<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComBrowser
 */
class ComBrowser extends Model
{
    protected $table = 'com_browser';

    public $timestamps = false;

    protected $fillable = [
        'kernel',
        'browser',
        'version',
        'count'
    ];

    protected $guarded = [];

        
}