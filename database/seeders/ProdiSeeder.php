<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_prodi')->insert([
            'id_prodi' => 1,
            'prodi' => 'Teknologi Informasi',
            'alamat_prodi' => 'Jalan Kampus Udayana',
            'status' => 'aktif'
        ]);
        DB::table('tb_prodi')->insert([
            'id_prodi' => 2,
            'prodi' => 'Teknik Sipil',
            'alamat_prodi' => 'Jalan Kampus Udayana',
            'status' => 'aktif'
        ]);
        DB::table('tb_prodi')->insert([
            'id_prodi' => 3,
            'prodi' => 'Arsitektur',
            'alamat_prodi' => 'Jalan Kampus Udayana',
            'status' => 'aktif'
        ]);
        DB::table('tb_prodi')->insert([
            'id_prodi' => 4,
            'prodi' => 'Teknik Elektro',
            'alamat_prodi' => 'Jalan Kampus Udayana',
            'status' => 'aktif'
        ]);
    }
}
