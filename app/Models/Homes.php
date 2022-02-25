<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'home_1_title',
        'home_1_text',
        'home_1_img',
        'home_2_title',
        'home_2_text',
        'home_2_img',
        'home_3_title',
        'home_3_text',
        'home_3_img',
        'slider_home_1_active',
        'slider_home_1_video',
        'slider_home_1_image',
        'slider_home_2_video',
        'slider_home_2_image',
        'slider_home_3_video',
        'slider_home_3_image',
        'home_5_title',
        'home_5_text',
        'home_4_title',
        'home_4_text',
        'home_4_img',
        'slider_home_2_active',
        'slider_home_4_video',
        'slider_home_4_image',
        'slider_home_5_video',
        'slider_home_5_image',
        'slider_home_6_video',
        'slider_home_6_image',
        'counter_active',
        'counter_number_1',
        'counter_number_2',
        'counter_number_3',
        'counter_text_1',
        'counter_text_2',
        'counter_text_3',
        'counter_description',
        'slider_home_3_active',
        'slider_home_7_video',
        'slider_home_7_image',
        'slider_home_8_video',
        'slider_home_8_image',
        'slider_home_9_video',
        'slider_home_9_image'
    ];
}
