<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'barang_id'     => $i,
                'user_id'       => rand(1, 3),
                'stok_tanggal'  => date('Y-m-d', strtotime("-{$i} days")),
                'stok_jumlah'   => rand(20, 100),
            ];
        }
        DB::table('t_stok')->insert($data);
    }
}
