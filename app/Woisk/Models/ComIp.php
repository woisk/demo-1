<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComIp
 */
class ComIp extends Model
{
    protected $table = 'com_ip';

    public $timestamps = false;

    protected $fillable = [
        'ip',
        'city',
        'count'
    ];

    protected $guarded = [];

        
}