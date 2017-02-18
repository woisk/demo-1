<?php

namespace App\Woisk\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Account
 */
class Account extends Authenticatable
{
    use Notifiable;
    protected $table = 'account';

    protected $primaryKey = 'uid';

    public $timestamps = true;

    protected $fillable = [
        'email',
        'mobile',
        'username',
        'password',
        'state',
        'login_count'
    ];
    protected $hidden = [
        'email',
        'mobile',
        'password',
        'created_at',
        'updated_at'
    ];

    protected $guarded = [];


}