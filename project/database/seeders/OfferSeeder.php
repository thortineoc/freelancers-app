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
            'deadline' => '2012-01-20 10:00',
            'price'=>200,
            'details' => 'details1',
            'user_id'=>2,
            'order_id'=>1
        ]);

        DB::table('offers')->insert([
            'deadline' => '2012-01-20 15:00',
            'price'=>200,
            'details' => 'details2',
            'user_id'=>3,
            'order_id'=>1
        ]);

        DB::table('offers')->insert([
            'deadline' => '2012-01-20 15:00',
            'price'=>1000,
            'details' => 'details3',
            'user_id'=>1,
            'order_id'=>1
        ]);

        DB::table('offers')->insert([
            'deadline' => '2012-01-20 15:00',
            'price'=>2000,
            'details' => 'details4',
            'user_id'=>3,
            'order_id'=>1
        ]);

        DB::table('offers')->insert([
            'deadline' => '2012-01-20 15:00',
            'price'=>1000,
            'details' => 'details5',
            'user_id'=>1,
            'order_id'=>2
        ]);

        DB::table('offers')->insert([
            'deadline' => '2012-01-20 15:00',
            'price'=>1000,
            'details' => 'details5',
            'user_id'=>1,
            'order_id'=>3
        ]);

        DB::table('offers')->insert([
            'deadline' => '2012-01-20 15:00',
            'price'=>5000,
            'details' => 'details6',
            'user_id'=>2,
            'order_id'=>3
        ]);

        DB::table('offers')->insert([
            'deadline' => '2202-01-20 15:00',
            'price'=>50.3,
            'details' => 'details7',
            'user_id'=>1,
            'order_id'=>5
        ]);
    }
}
