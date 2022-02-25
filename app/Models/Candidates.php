<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'password',
        'password_save',
        'school',
        'phone',
        'country',
        'country_legal',
        'country_geo_location',
        'linkedin',
        'experience',
        'created_at',
        'updated_at'
    ];
}
