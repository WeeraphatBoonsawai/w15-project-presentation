<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('music')->insert
        ([
            ['music_name' => 'A New Start',
            'music_img' => 'https://hololive.hololivepro.com/wp-content/uploads/2022/01/Nanashi-Mumei_ANewStart_Jk-300x300.png',
            'music_link' => 'https://youtu.be/Py21QCndbxc',
            'ch' => 'Nanashi Mumei',],

            ['music_name' => 'mumei',
            'music_img' => 'https://hololive.hololivepro.com/wp-content/uploads/2023/10/mumei_jaket_B.png',
            'music_link' => 'https://youtu.be/oA0CpI0vCK4',
            'ch' => 'Nanashi Mumei',],

            ['music_name' => 'REFLECT',
            'music_img' => 'https://hololive.hololivepro.com/wp-content/uploads/2021/06/gura_reflect_jk-1536x1536.png',
            'music_link' => 'https://youtu.be/WGgEFoI9MhE',
            'ch' => 'Gawr Gura',],

            ['music_name' => 'Q',
            'music_img' => 'https://hololive.hololivepro.com/wp-content/uploads/2022/02/Mori-Calliope-Gawr-Gura_Q_jk-1536x1536.png',
            'music_link' => 'https://youtu.be/aetXqd9B8WE',
            'ch' => 'Gawr Gura',],

            ['music_name' => 'SHINKIRO',
            'music_img' => 'https://hololive.hololivepro.com/wp-content/uploads/2023/11/SHINKIRO.webp',
            'music_link' => 'https://www.youtube.com/watch?v=9ehwhQJ50gs',
            'ch' => 'Gawr Gura',],

            ['music_name' => 'Still Still Stellar',
            'music_img' => 'https://hololive.hololivepro.com/wp-content/uploads/2021/09/%E6%98%9F%E8%A1%97%E3%81%99%E3%81%84%E3%81%9B%E3%81%84_Still-Still-Stellar_jk-1536x1536.png',
            'music_link' => 'https://youtu.be/a51VH9BYzZA',
            'ch' => 'Hoshimachi Suisei',],
        ]);
    }
}
