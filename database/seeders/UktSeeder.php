<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_ukt')->insert([
            'id_ukt' => 1,
            'minimal_jalur_penerimaan' => 'snmptn/sbmptn',
            'tanggal_aktif' => '2020-01-01',
            'besar_ukt' => '1000000'
        ]);

        DB::table('tb_ukt')->insert([
            'id_ukt' => 2,
            'minimal_jalur_penerimaan' => 'snmptn/sbmptn',
            'tanggal_aktif' => '2020-01-01',
            'besar_ukt' => '2000000'
        ]);

        DB::table('tb_ukt')->insert([
            'id_ukt' => 3,
            'minimal_jalur_penerimaan' => 'snmptn/sbmptn',
            'tanggal_aktif' => '2020-01-01',
            'besar_ukt' => '3000000'
        ]);

        DB::table('tb_ukt')->insert([
            'id_ukt' => 4,
            'minimal_jalur_penerimaan' => 'mandiri',
            'tanggal_aktif' => '2020-01-01',
            'besar_ukt' => '4000000'
        ]);

        DB::table('tb_ukt')->insert([
            'id_ukt' => 5,
            'minimal_jalur_penerimaan' => 'mandiri',
            'tanggal_aktif' => '2020-01-01',
            'besar_ukt' => '5000000'
        ]);
    }
}
