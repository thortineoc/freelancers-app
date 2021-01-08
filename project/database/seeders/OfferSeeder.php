<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert([
            'deadline' => '2012-01-20 1-:00',
            'price'=>200,
            'details' => 'details1',
            'doerID'=>2,
            'orderID'=>1
        ]);

        DB::table('offers')->insert([
            'deadline' => '2012-01-20 15:00',
            'price'=>200,
            'details' => 'details2',
            'doerID'=>3,
            'orderID'=>1
        ]);

        DB::table('offers')->insert([
            'deadline' => '2012-01-20 15:00',
            'price'=>1000,
            'details' => 'details3',
            'doerID'=>1,
            'orderID'=>2
        ]);

        DB::table('offers')->insert([
            'deadline' => '2012-01-20 15:00',
            'price'=>2000,
            'details' => 'details4',
            'doerID'=>3,
            'orderID'=>2
        ]);

        DB::table('offers')->insert([
            'deadline' => '2012-01-20 15:00',
            'price'=>1000,
            'details' => 'details5',
            'doerID'=>1,
            'orderID'=>3
        ]);

        DB::table('offers')->insert([
            'deadline' => '2012-01-20 15:00',
            'price'=>5000,
            'details' => 'details6',
            'doerID'=>2,
            'orderID'=>3
        ]);
    }
}
