<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $detailId = 1;
        
        for ($penjualan = 1; $penjualan <= 10; $penjualan++) {
            $barangIds = range(($penjualan % 5) * 3 + 1, ($penjualan % 5) * 3 + 3);
            foreach ($barangIds as $barangId) {
                $barangId = (($barangId - 1) % 15) + 1;

                $hargaList = [75000, 18000, 4000, 6000, 5500, 18000, 22000, 16000, 22000, 28000, 55000, 70000, 28000, 28000, 17000];
                $data[] = [
                    'detail_id'    => $detailId++,
                    'penjualan_id' => $penjualan,
                    'barang_id'    => $barangId,
                    'harga'        => $hargaList[$barangId - 1],
                    'jumlah'       => rand(1, 5),
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
