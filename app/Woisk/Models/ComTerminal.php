<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComTerminal
 */
class ComTerminal extends Model
{
    protected $table = 'com_terminal';

    public $timestamps = false;

    protected $fillable = [
        'type',
        'os',
        'version',
        'count'
    ];

    protected $guarded = [];

        
}