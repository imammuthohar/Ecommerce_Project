<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Invoices;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // 

        // User::factory()
        // ->count(50)
        // ->create();
        Invoices::factory(5)->create([
            
            'invoice'=>'7988374',	
            'customer_id'=>'6',	
            'courier'=> 'andi',	
            'courier_service'=>'post',	
            'courier_cost'=> '89',
            'weight'=> '90',
            'name'	=> 'salman',
            'phone'	=> '09886222',
            'city_id'	=> 2,
            'province_id'	=> 1,
            'address'	=> 'Salatiga',
            'status'	=> 'failed',
            'grand_total'	=> '876',
            'snap_token'=> '87uhjh88sss',

           
           
        ]);
    }
}
