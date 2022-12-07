<?php

namespace Database\Seeders;

use App\Models\Customers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {      
        // User::factory(5)->create();
         Customers::factory(5)->create();
        $this->call([
            ProvinceSeeder::class,
            CitySeeder::class,
            UserSeeder::class,    
        ]);
    

        
    }
}
