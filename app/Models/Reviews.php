<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = [
    'rating',
    'review',
    'product_id',
    'order_id',
    'customer_id',
    ];

    public function product()
    {       
        return $this->belongsTo(Products::class);
    }

    public function order()
    {       
        return $this->belongsTo(Orders::class);
    }

    public function customer()
    {       
        return $this->belongsTo(Customers::class);
    }
}
