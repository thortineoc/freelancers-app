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
            'id' => 1,
            'finished' => false,
            'rejected' => false,
            'rate_time' => 1,
            'rate_quality' => 5,
            'accepted_id' => 1
        ]);
    }
}
