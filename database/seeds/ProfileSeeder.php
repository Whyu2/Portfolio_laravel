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
    }
}
