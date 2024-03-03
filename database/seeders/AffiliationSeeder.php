<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AffiliationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('affiliation')->insert
        ([
            ['affiliation_name' => 'Hololive'],
            ['affiliation_name' => 'Hololive English'],
            ['affiliation_name' => 'Hololive Indonesia'],
        ]);
    }
}
