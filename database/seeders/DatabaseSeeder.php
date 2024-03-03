<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AffiliationSeeder::class,
            GenderSeeder::class,
            GenerationSeeder::class,
            MusicSeeder::class,
            MembersSeeder::class,
           ]);
    }
}
