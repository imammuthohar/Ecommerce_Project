<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Carbon;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
];

public function getCreatedAtAttribute()
{
    return Carbon::parse($this->attributes['created_at'])
    ->translatedFormat('l, d F Y');
}
}
