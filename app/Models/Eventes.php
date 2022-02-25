<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'registration',
        'description',
        'video',
        'image',
        'speakers',
        'hosts',
        'spaces',
        'category',
        'language',
        'date'
    ];
}
