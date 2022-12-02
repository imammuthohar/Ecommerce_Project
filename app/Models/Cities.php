<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $fillable = [
    'province_id',
    'city_id',
    'name',
     
    ];


    public function province()
    {       
        return $this->belongsTo(Provinces::class);
    }
}
