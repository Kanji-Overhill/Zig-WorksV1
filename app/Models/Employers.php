<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'password',
        'phone',
        'linkedin',
        'description',
        'company_name',
        'company_website',
        'created_at',
        'updated_at'
    ];
}
