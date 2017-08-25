<?php

use Illuminate\Database\Seeder;

class CabinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 60; $i++) { 
            DB::table('cabins')->insert([
                'position' => 'A'.$i,
            ]);
        }   
        for ($i=1; $i <= 60; $i++) { 
            DB::table('cabins')->insert([
                'position' => 'B'.$i,
            ]);
        }   
        for ($i=1; $i <= 30; $i++) { 
            DB::table('cabins')->insert([
                'position' => 'C'.$i,
            ]);
        }        
    }
}
