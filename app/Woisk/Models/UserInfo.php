<?php

namespace App\Woisk\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserInfo
 */
class UserInfo extends Model
{
    protected $table = 'user_info';

    public $timestamps = false;

    protected $fillable = [
        'uid',
        'user_name_id',
        'user_gender_id',
        'user_yaer_id',
        'user_month_id',
        'user_age_id',
        'user_weight_id',
        'user_height_id',
        'user_nation_id',
        'user_bloodtype_id',
        'user_occ_id',
        'user_edu_id',
        'user_zodiac_id',
        'user_constellation_id',
        'user_salary_id'
    ];

    protected $guarded = [];

        
}