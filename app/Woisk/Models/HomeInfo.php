<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeInfo
 */
class HomeInfo extends Model
{
    protected $table = 'home_info';

    public $timestamps = true;

    protected $fillable = [
        'alias',
        'state',
        'home_title_id',
        'home_info_com_type_id'
    ];

    protected $guarded = [];

        
}