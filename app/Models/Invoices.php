<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;
    protected $fillabe = [
        'invoice',
        'customer_id',
        'courier',
        'courier_service',
        'courier_cost',
        'weight',
        'name',
        'phone',
        'city_id',
        'province_id',
        'address',
        'status',
        'grand_total',
        'snap_token',
    ];

    public function city()
    {       
        return $this->belongsTo(Cities::class);
    }

    public function province ()
    {
        return $this->belongsTo(Provinces::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }



}
