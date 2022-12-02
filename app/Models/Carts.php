<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'customer_id',
        'qty',
        'price',
        'weight',
  
    ];

    public function product()
    {       
        return $this->belongsTo(Products::class);
    }
    public function customer()
    {       
        return $this->belongsTo(Customers::class);
    }
}
