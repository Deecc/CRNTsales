<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50 ; $i++) { 
        DB::table('clients')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'phone' => mt_rand(900000000,999999999),
            'social_number' => mt_rand(00000000000,99999999999),
        ]);    
        }
        
    }
}
