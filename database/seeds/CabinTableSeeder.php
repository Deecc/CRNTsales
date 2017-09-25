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
        for ($i=1; $i <= 37; $i++) { 
            DB::table('cabins')->insert([
                'position' => 'A'.$i.':A',
            ]);
            DB::table('cabins')->insert([
                'position' => 'A'.$i.':B',
            ]);
        }   
        for ($i=1; $i <= 33; $i++) { 
            DB::table('cabins')->insert([
                'position' => 'A'.$i.':A',
            ]);
            DB::table('cabins')->insert([
                'position' => 'A'.$i.':B',
            ]);
        }   
        // for ($i=1; $i <= 30; $i++) { 
        //     DB::table('cabins')->insert([
        //         'position' => 'C'.$i,
        //     ]);
        // }        
    }
}
