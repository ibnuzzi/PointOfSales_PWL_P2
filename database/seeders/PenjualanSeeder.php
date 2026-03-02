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
        $data = [];
        $namaPembeli = ['Budi Santoso', 'Siti Rahayu', 'Ahmad Fauzi', 'Dewi Lestari', 'Rudi Hartono'];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'penjualan_id'      => $i,
                'user_id'           => rand(1, 3),
                'pembeli'           => $namaPembeli[($i - 1) % 5],
                'penjualan_kode'    => 'PJL' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'penjualan_tanggal' => date('Y-m-d H:i:s', strtotime("-{$i} days")),
            ];
        }
        DB::table('t_penjualan')->insert($data);
    }
}
