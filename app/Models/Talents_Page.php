<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talents_Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'banner_image',
        'banner_link',
        'title_1',
        'image_1',
        'title_2',
        'text_2',
        'title_3',
        'text_3',
        'image_3',
        'title_4',
        'text_4',
        'title_6',
        'text_6',
        'slider_active',
        'slider_1_video',
        'slider_1_image',
        'slider_2_video',
        'slider_2_image',
        'slider_3_video',
        'slider_3_image'
    ];
}
