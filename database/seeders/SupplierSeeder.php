<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP001', 'supplier_nama' => 'PT Sumber Makmur', 'supplier_alamat' => 'Jl. Raya No. 1, Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP002', 'supplier_nama' => 'CV Berkah Jaya', 'supplier_alamat' => 'Jl. Merdeka No. 5, Surabaya'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP003', 'supplier_nama' => 'UD Mandiri Sejahtera', 'supplier_alamat' => 'Jl. Kenanga No. 10, Malang'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
