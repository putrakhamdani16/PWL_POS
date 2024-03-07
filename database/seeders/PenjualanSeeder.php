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
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli'=> 'Zira',
                'penjualan_kode' => 'PJL01',
                'penjulan_tanggal' => '2024-01-05',
            ],
            [
                'penjualan_id' =>2,
                'user_id' => 3,
                'pembeli'=> 'Mbappe',
                'penjualan_kode' => 'PJL02',
                'penjulan_tanggal' => '2024-01-07',
            ],
            [
                'penjualan_id' =>3,
                'user_id' => 3,
                'pembeli'=> 'Rusdi',
                'penjualan_kode' => 'PJL03',
                'penjulan_tanggal' => '2024-01-12',
            ],
            [
                'penjualan_id' =>4,
                'user_id' => 3,
                'pembeli'=> 'Rahma',
                'penjualan_kode' => 'PJL04',
                'penjulan_tanggal' => '2024-01-19',
            ],
            [
                'penjualan_id' =>5,
                'user_id' => 3,
                'pembeli'=> 'Onana',
                'penjualan_kode' => 'PJL05',
                'penjulan_tanggal' => '2024-01-25',
            ],
            [
                'penjualan_id' =>6,
                'user_id' => 3,
                'pembeli'=> 'Messi',
                'penjualan_kode' => 'PJL06',
                'penjulan_tanggal' => '2024-01-31',
            ],
            [
                'penjualan_id' =>7,
                'user_id' => 3,
                'pembeli'=> 'Yulastri',
                'penjualan_kode' => 'PJL07',
                'penjulan_tanggal' => '2024-02-01',
            ],
            [
                'penjualan_id' =>8,
                'user_id' => 3,
                'pembeli'=> 'Neymar',
                'penjualan_kode' => 'PJL08',
                'penjulan_tanggal' => '2024-02-02',
            ],
            [
                'penjualan_id' =>9,
                'user_id' => 3,
                'pembeli'=> 'Ten hag',
                'penjualan_kode' => 'PJL09',
                'penjulan_tanggal' => '2024-02-02',
            ],
            [
                'penjualan_id' =>10,
                'user_id' => 3,
                'pembeli'=> 'Ronaldo',
                'penjualan_kode' => 'PJL10',
                'penjulan_tanggal' => '2024-02-03',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
