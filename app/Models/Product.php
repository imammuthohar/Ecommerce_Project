<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(Categories::class);
    }
}
