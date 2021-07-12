<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile')->insert([
            'nama' => 'isi nama',
            'slogan' => 'isi slogan',
            'gambar' => 'thumb.png',

        ]);
        DB::table('about')->insert([
            'about' => 'isi about',

        ]);
        DB::table('projek')->insert([
            [
                'gambar' => 'projek_1.jpg',
                'deskripsi' => 'isi deskripsi 1',
            ],
            [
                'gambar' => 'projek_2.jpg',
                'deskripsi' => 'isi deskripsi 2',
            ],
            [
                'gambar' => 'projek_3.jpg',
                'deskripsi' => 'isi deskripsi 3',
            ],
            [
                'gambar' => 'projek_4.jpg',
                'deskripsi' => 'isi deskripsi 4',
            ],
            [
                'gambar' => 'projek_5.jpg',
                'deskripsi' => 'isi deskripsi 5',
            ],


        ]);
    }
}
