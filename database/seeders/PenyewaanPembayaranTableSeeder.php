<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenyewaanPembayaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penyewaan_pembayaran')->delete();
        
        \DB::table('penyewaan_pembayaran')->insert(array (
            0 => 
            array (
                'id' => 26,
                'tanggal' => '2022-10-09',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 1000000,
                'penyewaan' => 8,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:17:31',
                'updated_at' => '2022-10-09 14:17:31',
            ),
            1 => 
            array (
                'id' => 27,
                'tanggal' => '2022-10-09',
                'nama' => 'Pembayaran Ke 2',
                'keterangan' => NULL,
                'nominal' => 500000,
                'penyewaan' => 8,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:18:59',
                'updated_at' => '2022-10-09 14:18:59',
            ),
            2 => 
            array (
                'id' => 28,
                'tanggal' => '2022-10-09',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 4000000,
                'penyewaan' => 9,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:35:45',
                'updated_at' => '2022-10-09 21:35:45',
            ),
            3 => 
            array (
                'id' => 29,
                'tanggal' => '2022-10-10',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 1000000,
                'penyewaan' => 10,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:33:26',
                'updated_at' => '2022-10-10 00:33:26',
            ),
            4 => 
            array (
                'id' => 30,
                'tanggal' => '2022-10-10',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 1400000,
                'penyewaan' => 8,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 01:14:49',
                'updated_at' => '2022-10-10 01:14:49',
            ),
            5 => 
            array (
                'id' => 31,
                'tanggal' => '2022-10-10',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 2750000,
                'penyewaan' => 10,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:48:35',
                'updated_at' => '2022-10-10 11:48:35',
            ),
            6 => 
            array (
                'id' => 32,
                'tanggal' => '2022-10-10',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 10000000,
                'penyewaan' => 11,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:56:17',
                'updated_at' => '2022-10-10 11:56:17',
            ),
            7 => 
            array (
                'id' => 33,
                'tanggal' => '2022-10-10',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 7075000,
                'penyewaan' => 11,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-10-10 13:15:41',
                'updated_at' => '2022-10-10 13:15:41',
            ),
            8 => 
            array (
                'id' => 34,
                'tanggal' => '2022-10-10',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 1000000,
                'penyewaan' => 13,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 14:24:39',
                'updated_at' => '2022-10-10 14:24:39',
            ),
            9 => 
            array (
                'id' => 35,
                'tanggal' => '2022-10-15',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 4000000,
                'penyewaan' => 14,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-15 21:08:55',
                'updated_at' => '2022-10-15 21:08:55',
            ),
            10 => 
            array (
                'id' => 36,
                'tanggal' => '2022-10-18',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 1000000,
                'penyewaan' => 15,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:25:11',
                'updated_at' => '2022-10-18 22:25:11',
            ),
            11 => 
            array (
                'id' => 37,
                'tanggal' => '2022-10-22',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 7792500,
                'penyewaan' => 15,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 04:56:01',
                'updated_at' => '2022-10-22 04:56:01',
            ),
            12 => 
            array (
                'id' => 38,
                'tanggal' => '2022-10-22',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 5200000,
                'penyewaan' => 14,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 06:16:45',
                'updated_at' => '2022-10-22 06:16:45',
            ),
            13 => 
            array (
                'id' => 39,
                'tanggal' => '2022-10-22',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 4850000,
                'penyewaan' => 9,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 06:17:05',
                'updated_at' => '2022-10-22 06:17:05',
            ),
            14 => 
            array (
                'id' => 40,
                'tanggal' => '2022-10-22',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 1000000,
                'penyewaan' => 12,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-10-22 10:22:17',
                'updated_at' => '2022-10-22 10:22:17',
            ),
        ));
        
        
    }
}