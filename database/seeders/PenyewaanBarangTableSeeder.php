<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenyewaanBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penyewaan_barang')->delete();
        
        \DB::table('penyewaan_barang')->insert(array (
            0 => 
            array (
                'id' => '1',
                'penyewaan' => '1',
                'barang' => '1',
                'qty' => '5',
                'harga' => '100000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-29 20:16:51',
                'updated_at' => '2022-11-29 20:16:51',
            ),
            1 => 
            array (
                'id' => '2',
                'penyewaan' => '1',
                'barang' => '5',
                'qty' => '6',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-29 20:17:16',
                'updated_at' => '2022-11-29 20:17:16',
            ),
            2 => 
            array (
                'id' => '3',
                'penyewaan' => '2',
                'barang' => '5',
                'qty' => '20',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-29 20:34:43',
                'updated_at' => '2022-11-29 20:34:43',
            ),
            3 => 
            array (
                'id' => '4',
                'penyewaan' => '2',
                'barang' => '6',
                'qty' => '20',
                'harga' => '5000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-29 20:35:09',
                'updated_at' => '2022-11-29 20:35:09',
            ),
            4 => 
            array (
                'id' => '5',
                'penyewaan' => '3',
                'barang' => '2',
                'qty' => '1',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-07-16 12:14:38',
                'updated_at' => '2023-07-16 12:14:38',
            ),
            5 => 
            array (
                'id' => '6',
                'penyewaan' => '3',
                'barang' => '4',
                'qty' => '1',
                'harga' => '750000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-07-16 12:14:50',
                'updated_at' => '2023-07-16 12:14:50',
            ),
        ));
        
        
    }
}