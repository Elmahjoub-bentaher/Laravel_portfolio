<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExp extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobTitle',
        'company',
        'description',
        'startDate',
        'endDate'
    ];

    protected $casts = [
        'startDate' => 'date',
        'endDate' => 'date'
    ];
}
