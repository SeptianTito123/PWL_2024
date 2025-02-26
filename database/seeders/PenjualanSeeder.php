<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan')->insert([
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'Alice Johnson', 'penjualan_kode' => 'PNJ001', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 2, 'user_id' => 2, 'pembeli' => 'Bob Williams', 'penjualan_kode' => 'PNJ002', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Charlie Brown', 'penjualan_kode' => 'PNJ003', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 4, 'user_id' => 1, 'pembeli' => 'David Smith', 'penjualan_kode' => 'PNJ004', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 5, 'user_id' => 2, 'pembeli' => 'Ella Martinez', 'penjualan_kode' => 'PNJ005', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Franklin Green', 'penjualan_kode' => 'PNJ006', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'Grace Adams', 'penjualan_kode' => 'PNJ007', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 8, 'user_id' => 2, 'pembeli' => 'Henry Clark', 'penjualan_kode' => 'PNJ008', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Isabella White', 'penjualan_kode' => 'PNJ009', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'Jack Turner', 'penjualan_kode' => 'PNJ010', 'penjualan_tanggal' => now()],
        ]);
        
    }
}
