<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generation')->insert
        ([
            ['generation_name' => 'Hololive English -Myth-',
            'generation_img' => 'hololive_EnglishMyth.png'],

            ['generation_name' => 'Hololive English -Promise-',
            'generation_img' => 'Promise_logo.png'],

            ['generation_name' => 'Hololive English -Advent-',
            'generation_img' => 'holoAdvent.png'],

            ['generation_name' => 'Hololive 0th Generation',
            'generation_img' => 'Logo_-_hololive.png'],

            ['generation_name' => 'Hololive 1th Generation',
            'generation_img' => 'Logo_-_hololive.png'],

            ['generation_name' => 'Hololive 2th Generation',
            'generation_img' => 'Logo_-_hololive.png'],

            ['generation_name' => 'Hololive 3rd Generation: Hololive Fantasy',
            'generation_img' => 'Logo_-_Hololive_Fantasy.png'],

            ['generation_name' => 'Hololive 4th Generation',
            'generation_img' => 'Logo_-_hololive.png'],

            ['generation_name' => 'Hololive 5th Generation',
            'generation_img' => 'Logo_-_hololive.png'],
            
            ['generation_name' => 'Hololive 6th Generation: Secret Society holoX',
            'generation_img' => 'Logo_-_Secret_Society_holoX_01.png'],
        ]);
    }
}
