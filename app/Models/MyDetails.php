<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profession',
        'address',
        'email',
        'profile_image',
        'phone',
        'dayOfBirth',
        'aboutMe',
        'resume',
        'logo'
    ];
}
