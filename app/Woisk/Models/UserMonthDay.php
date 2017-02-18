<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserMonthDay
 */
class UserMonthDay extends Model
{
    protected $table = 'user_month_day';

    public $timestamps = false;

    protected $fillable = [
        'month',
        'day',
        'count'
    ];

    protected $guarded = [];

        
}