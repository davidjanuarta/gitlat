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
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'SRY',
                'nama_barang' => 'Surya',
                'harga_barang' => 24000,
                'deskripsi_barang' => 'Rokok Untuk Indonesia',
                'satuan_id' => 1,
            ],
            [
                'kode_barang' => 'SMP',
                'nama_barang' => 'Sampoerna Mild',
                'harga_barang' => 32000,
                'deskripsi_barang' => 'Rokok Untuk Indonesia',
                'satuan_id' => 1,
            ],
        ]);
    }
}
