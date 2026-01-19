<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'website',
        'about',
        'industry',
        'employees_count',
        'address',
        'city',
        'province',
        'country',
        'logo',
        'is_verified',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
