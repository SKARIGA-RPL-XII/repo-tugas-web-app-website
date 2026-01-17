<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title',
        'company',
        'location',
        'salary',
        'type',
        'remote',
        'category',
        'description',
        'requirements',
        'responsibilities',
        'status'
    ];

    protected $casts = [
        'requirements' => 'array',
        'responsibilities' => 'array'
    ];
}