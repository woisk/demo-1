<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComUrl
 */
class ComUrl extends Model
{
    protected $table = 'com_url';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'url',
        'click',
        'state'
    ];

    protected $guarded = [];

        
}