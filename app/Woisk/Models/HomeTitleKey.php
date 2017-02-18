<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeTitleKey
 */
class HomeTitleKey extends Model
{
    protected $table = 'home_title_key';

    public $timestamps = false;

    protected $fillable = [
        'state',
        'home_title_com_key_id',
        'home_title_id'
    ];

    protected $guarded = [];

        
}