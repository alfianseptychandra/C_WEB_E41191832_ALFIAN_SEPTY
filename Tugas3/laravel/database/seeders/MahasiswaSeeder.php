<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'name' => 'Alfian Septy Chandra',
            'alamat' => 'jember permai II blok h-9 ,kecamatan sumbersari,kab jember',
            'jenis_kelamin' => 1 ,
            'prodi' => 1,
            'no_hp' => '082334223961'

        ]);
        //
    }
}
