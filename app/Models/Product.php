<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
   
    use HasFactory;
    protected $fillable = [
            'image',
            'title',
            'slug',
            'category_id',
            'user_id',
            'description',
            'weight',
            'price',
            'stock',
            'discount',
    ];

    public function user()
    {       
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
