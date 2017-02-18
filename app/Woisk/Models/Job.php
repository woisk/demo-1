<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Job
 */
class Job extends Model
{
    protected $table = 'jobs';

    public $timestamps = true;

    protected $fillable = [
        'queue',
        'payload',
        'attempts',
        'reserved_at',
        'available_at'
    ];

    protected $guarded = [];

        
}