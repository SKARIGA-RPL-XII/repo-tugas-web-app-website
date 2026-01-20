<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'user_id',
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}