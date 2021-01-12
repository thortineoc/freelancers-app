<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SelectedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('selected')->insert([
            'finished' => false,
            'rejected' => false,
            'rate_time' => 0,
            'rate_quality' => 0,
            'accepted_id' => 1
        ]);

        DB::table('selected')->insert([
            'finished' => false,
            'rejected' => true,
            'rate_time' => 4,
            'rate_quality' => 3,
            'accepted_id' => 2
        ]);

        DB::table('selected')->insert([
            'finished' => false,
            'rejected' => false,
            'rate_time' => 4,
            'rate_quality' => 3,
            'accepted_id' => 4
        ]);
    }
}
