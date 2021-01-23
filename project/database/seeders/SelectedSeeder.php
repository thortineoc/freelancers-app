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
            'accepted_id' => 1
        ]);

        DB::table('selected')->insert([
            'finished' => false,
            'rejected' => true,
            'accepted_id' => 2
        ]);

        DB::table('selected')->insert([
            'finished' => false,
            'rejected' => false,
            'accepted_id' => 4
        ]);
    }
}
