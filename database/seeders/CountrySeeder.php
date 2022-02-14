<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert(
            ['name' => 'Georgia']
        );
        DB::table('countries')->insert(
            ['name' => 'Usa']
        );
        DB::table('countries')->insert(
            ['name' => 'India']
        );
        DB::table('countries')->insert(
            ['name' => 'Germany']
        );
        DB::table('countries')->insert(
            ['name' => 'France']
        );
    }
}
