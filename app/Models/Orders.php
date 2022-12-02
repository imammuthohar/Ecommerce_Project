<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'product_id',
        'qty',    
        'price',
    ];

    public function invoice()
    {       
        return $this->belongsTo(Invoices::class);
    }
    public function product()
    {       
        return $this->belongsTo(Products::class);
    }
}
