<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcceptedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accepted')->insert([
            'priority' => 2,
            'offer_id'=>1
        ]);
        DB::table('accepted')->insert([
            'priority' => 1,
            'offer_id' => 2
        ]);
        DB::table('accepted')->insert([
            'priority' => 3,
            'offer_id' => 3
        ]);


        DB::table('accepted')->insert([
            'priority' => 1,
            'offer_id' => 5
        ]);

        DB::table('accepted')->insert([
            'priority' => 1,
            'offer_id' => 8
        ]);
    }
}
