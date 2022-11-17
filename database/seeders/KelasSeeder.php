<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* ============================ */
        DB::table('kelas')->insert([
            'nama_kelas' => '10 PPLG 1',
            'nama_jurusan' => 'Pengembangan Perangkat Lunak dan Gim',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        /* ============================ */
           DB::table('kelas')->insert([
            'nama_kelas' => '10 PPLG 2',
            'nama_jurusan' => 'Pengembangan Perangkat Lunak dan Gim',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        /* ============================ */
           DB::table('kelas')->insert([
            'nama_kelas' => '11 RPL 1',
            'nama_jurusan' => 'Rekayasa Perangkat Lunak',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        /* ============================ */
        DB::table('kelas')->insert([
            'nama_kelas' => '11 RPL 2',
            'nama_jurusan' => 'Rekayasa Perangkat Lunak',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
