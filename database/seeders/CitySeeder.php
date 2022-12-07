<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

// use App\Models\City;
use App\Models\City;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fetch Rest API
        $response = Http::withHeaders([
            //api key rajaongkir
            'key' => '2a602e1a8d1c6e02f8fbd0484430cbf3',
        ])->get('https://api.rajaongkir.com/starter/city');
        
        //loop data from Rest API
        foreach($response['rajaongkir']['results'] as $city) {

            //insert ke table "provinces"
            City::create([
                'province_id' => $city['province_id'],
                'city_id'     => $city['city_id'],  
                'name'        => $city['city_name'] . ' - ' . '('. $city['type'] .')',  
            ]);

        }
    }
}


// batas

