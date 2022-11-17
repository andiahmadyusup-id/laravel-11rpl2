<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama_lengkap' => 'Andi Ahmad Yusup',
            'nis' => '12100060',
            'jk' => 'L',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama_lengkap' => 'Andi Ahmad Uchiha',
            'nis' => '1200090',
            'jk' => 'L',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama_lengkap' => 'Andi Uzumaki',
            'nis' => '19339090',
            'jk' => 'L',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
