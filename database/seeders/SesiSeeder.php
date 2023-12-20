<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class SesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sesi_peminjamen')->insert([
            'nama_sesi' => 'Sesi 1',
            'waktu' => '08.00 - 10.00'
        ]);

        DB::table('sesi_peminjamen')->insert([
            'nama_sesi' => 'Sesi 2',
            'waktu' => '10.00 - 12.00'
        ]);

        DB::table('sesi_peminjamen')->insert([
            'nama_sesi' => 'Sesi 3',
            'waktu' => '12.00 - 14.00'
        ]);

        DB::table('sesi_peminjamen')->insert([
            'nama_sesi' => 'Sesi 4',
            'waktu' => '14.00 - 16.00'
        ]);
    }
}
