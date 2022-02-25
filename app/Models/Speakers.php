<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'type',
        'image',
        'image',
        'event_id'
    ];
}
