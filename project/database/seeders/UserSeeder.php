<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('secret'),


        ]);

        DB::table('users')->insert([
            'name' => 'Max Doe',
            'email' => 'max.doe@gmail.com',
            'password' => bcrypt('secret'),
            'rate_time_sum' => 3.2,
            'rate_quality_sum' => 2.4,
            'number_of_rates' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Joe Doe',
            'email' => 'joe.doe@gmail.com',
            'password' => bcrypt('secret'),

        ]);
    }
}
