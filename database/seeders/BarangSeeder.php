<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Supplier 1 - PT Sumber Makmur (5 barang)
            ['barang_id' => 1,  'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Beras Premium 5kg',    'harga_beli' => 60000,  'harga_jual' => 75000],
            ['barang_id' => 2,  'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Minyak Goreng 1L',      'harga_beli' => 14000,  'harga_jual' => 18000],
            ['barang_id' => 3,  'kategori_id' => 2, 'supplier_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Air Mineral 600ml',     'harga_beli' => 2500,   'harga_jual' => 4000],
            ['barang_id' => 4,  'kategori_id' => 2, 'supplier_id' => 1, 'barang_kode' => 'BRG004', 'barang_nama' => 'Teh Botol 350ml',       'harga_beli' => 4000,   'harga_jual' => 6000],
            ['barang_id' => 5,  'kategori_id' => 5, 'supplier_id' => 1, 'barang_kode' => 'BRG005', 'barang_nama' => 'Sabun Mandi',           'harga_beli' => 3500,   'harga_jual' => 5500],

            // Supplier 2 - CV Berkah Jaya (5 barang)
            ['barang_id' => 6,  'kategori_id' => 3, 'supplier_id' => 2, 'barang_kode' => 'BRG006', 'barang_nama' => 'Baterai AA (4pcs)',     'harga_beli' => 12000,  'harga_jual' => 18000],
            ['barang_id' => 7,  'kategori_id' => 3, 'supplier_id' => 2, 'barang_kode' => 'BRG007', 'barang_nama' => 'Lampu LED 5W',          'harga_beli' => 15000,  'harga_jual' => 22000],
            ['barang_id' => 8,  'kategori_id' => 1, 'supplier_id' => 2, 'barang_kode' => 'BRG008', 'barang_nama' => 'Gula Pasir 1kg',        'harga_beli' => 13000,  'harga_jual' => 16000],
            ['barang_id' => 9,  'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'BRG009', 'barang_nama' => 'Kopi Sachet (10pcs)',   'harga_beli' => 16000,  'harga_jual' => 22000],
            ['barang_id' => 10, 'kategori_id' => 5, 'supplier_id' => 2, 'barang_kode' => 'BRG010', 'barang_nama' => 'Deterjen 900gr',        'harga_beli' => 22000,  'harga_jual' => 28000],

            // Supplier 3 - UD Mandiri Sejahtera (5 barang)
            ['barang_id' => 11, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'BRG011', 'barang_nama' => 'Kaos Polos M',          'harga_beli' => 35000,  'harga_jual' => 55000],
            ['barang_id' => 12, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'BRG012', 'barang_nama' => 'Celana Pendek L',       'harga_beli' => 45000,  'harga_jual' => 70000],
            ['barang_id' => 13, 'kategori_id' => 3, 'supplier_id' => 3, 'barang_kode' => 'BRG013', 'barang_nama' => 'Kabel Data USB-C',      'harga_beli' => 18000,  'harga_jual' => 28000],
            ['barang_id' => 14, 'kategori_id' => 5, 'supplier_id' => 3, 'barang_kode' => 'BRG014', 'barang_nama' => 'Shampo 200ml',          'harga_beli' => 20000,  'harga_jual' => 28000],
            ['barang_id' => 15, 'kategori_id' => 1, 'supplier_id' => 3, 'barang_kode' => 'BRG015', 'barang_nama' => 'Mie Instan (5pcs)',     'harga_beli' => 12000,  'harga_jual' => 17000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
