<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'title' => 'new_order1',
            'description' => 'description1',
            'budget' => 500,
            'user_id' => 1,
            'deadline' => '2012-01-20 15:00'
        ]);

        DB::table('orders')->insert([
            'title' => 'new_order2',
            'description' => 'description2',
            'budget' => 100,
            'user_id' => 2,
            'deadline' => '2012-01-30 14:00'
        ]);

        DB::table('orders')->insert([
            'title' => 'new_order3',
            'description' => 'description3',
            'budget' => 2000,
            'user_id' => 3,
            'deadline' => '2012-01-05 10:00'
        ]);

        DB::table('orders')->insert([
            'title' => 'new_order4_no_offer',
            'description' => 'description4_no_offer',
            'budget' => 200,
            'user_id' => 3,
            'deadline' => '2012-01-05 11:00'
        ]);

        DB::table('orders')->insert([
            'title' => 'new_order4_future_date',
            'description' => 'description4_future_date',
            'budget' => 20000,
            'user_id' => 2,
            'deadline' => '2022-01-05 11:00'
        ]);
    }
}
