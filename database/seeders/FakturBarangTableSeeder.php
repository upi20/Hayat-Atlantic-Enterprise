<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FakturBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faktur_barang')->delete();
        
        \DB::table('faktur_barang')->insert(array (
            0 => 
            array (
                'id' => '1',
                'faktur' => '1',
                'barang' => '1',
                'qty' => '5',
                'harga' => '100000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-29 20:23:58',
                'updated_at' => '2022-11-29 20:23:58',
            ),
            1 => 
            array (
                'id' => '2',
                'faktur' => '1',
                'barang' => '5',
                'qty' => '6',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-29 20:23:58',
                'updated_at' => '2022-11-29 20:23:58',
            ),
            2 => 
            array (
                'id' => '3',
                'faktur' => '2',
                'barang' => '5',
                'qty' => '20',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-29 20:36:31',
                'updated_at' => '2022-11-29 20:36:31',
            ),
            3 => 
            array (
                'id' => '4',
                'faktur' => '2',
                'barang' => '6',
                'qty' => '20',
                'harga' => '5000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-29 20:36:31',
                'updated_at' => '2022-11-29 20:36:31',
            ),
            4 => 
            array (
                'id' => '5',
                'faktur' => '3',
                'barang' => '1',
                'qty' => '5',
                'harga' => '100000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-29 21:08:43',
                'updated_at' => '2022-11-29 21:08:43',
            ),
            5 => 
            array (
                'id' => '6',
                'faktur' => '3',
                'barang' => '5',
                'qty' => '6',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-29 21:08:43',
                'updated_at' => '2022-11-29 21:08:43',
            ),
            6 => 
            array (
                'id' => '7',
                'faktur' => '4',
                'barang' => '2',
                'qty' => '1',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-07-16 12:15:52',
                'updated_at' => '2023-07-16 12:15:52',
            ),
            7 => 
            array (
                'id' => '8',
                'faktur' => '4',
                'barang' => '4',
                'qty' => '1',
                'harga' => '750000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-07-16 12:15:52',
                'updated_at' => '2023-07-16 12:15:52',
            ),
            8 => 
            array (
                'id' => '9',
                'faktur' => '5',
                'barang' => '2',
                'qty' => '1',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-07-16 12:20:23',
                'updated_at' => '2023-07-16 12:20:23',
            ),
            9 => 
            array (
                'id' => '10',
                'faktur' => '5',
                'barang' => '4',
                'qty' => '1',
                'harga' => '750000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-07-16 12:20:23',
                'updated_at' => '2023-07-16 12:20:23',
            ),
        ));
        
        
    }
}