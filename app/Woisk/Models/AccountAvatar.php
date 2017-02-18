<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccountAvatar
 */
class AccountAvatar extends Model
{
    protected $table = 'account_avatar';

    public $timestamps = true;

    protected $fillable = [
        'path',
        'driver',
        'state',
        'uid'
    ];

    protected $guarded = [];

        
}