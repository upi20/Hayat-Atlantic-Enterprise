<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::create([
        //     'name' => 'Isep Lutpi Nur',
        //     'email' => 'iseplutpinur7@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'active' => '1'
        // ]);
        // \App\Models\User::factory(150)->create();

        $this->call(UsersTableSeeder::class);
        $this->call(ArtikelTableSeeder::class);
        $this->call(ArtikelTagTableSeeder::class);
        $this->call(ArtikelKategoriTableSeeder::class);
        $this->call(ArtikelTagItemTableSeeder::class);
        $this->call(ArtikelKategoriItemTableSeeder::class);
        $this->call(GaleriTableSeeder::class);
        $this->call(GaleriTagMemberTableSeeder::class);
        $this->call(SocialMediaTableSeeder::class);
        $this->call(GFormsTableSeeder::class);
        $this->call(PRolesTableSeeder::class);
        $this->call(PPermissionsTableSeeder::class);
        $this->call(PMenuTableSeeder::class);
        $this->call(PModelHasPermissionsTableSeeder::class);
        $this->call(PModelHasRolesTableSeeder::class);
        $this->call(PRoleHasPermissionsTableSeeder::class);
        $this->call(PRoleHasMenuTableSeeder::class);
        $this->call(PMenuFrontendsTableSeeder::class);
        $this->call(NotifAdminAtasTableSeeder::class);
        $this->call(NotifDepanAtasTableSeeder::class);
        $this->call(HariBesarNasionalsTableSeeder::class);
        $this->call(ContactListTableSeeder::class);
        $this->call(ContactMessagesTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(BarangJenisTableSeeder::class);
        $this->call(BarangSatuanTableSeeder::class);
        $this->call(BarangTableSeeder::class);

        // pengadaan 
        $this->call(BarangPengadaanTableSeeder::class);
        $this->call(BarangPengadaanListTableSeeder::class);

        // penyewaan
        $this->call(PenyewaanTableSeeder::class);
        $this->call(PenyewaanBarangTableSeeder::class);
        $this->call(PenyewaanPembayaranTableSeeder::class);
        $this->call(BarangHabisPakaiTableSeeder::class);
        $this->call(BarangHabisPakaiPengadaanTableSeeder::class);
        $this->call(BarangHabisPakaiPengadaanListTableSeeder::class);
        $this->call(BarangHabisPakaiPenguranganTableSeeder::class);
        $this->call(BarangHabisPakaiPenguranganListTableSeeder::class);
        $this->call(FakturTableSeeder::class);
        $this->call(SuratJalanTableSeeder::class);
        $this->call(SuratJalanBarangTableSeeder::class);
        $this->call(FakturBarangTableSeeder::class);
        $this->call(GantiRugiTableSeeder::class);
        $this->call(GantiListBarangTableSeeder::class);
        $this->call(GantiRugiBarangTableSeeder::class);
        $this->call(GantiRugiPembayaranTableSeeder::class);
        $this->call(SuratJalanBarangHabisPakaiTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(PesananTableSeeder::class);
        $this->call(PesananBarangTableSeeder::class);

        // pengurangan
        $this->call(BarangPenguranganTableSeeder::class);
        $this->call(BarangPenguranganListTableSeeder::class);
    }
}
