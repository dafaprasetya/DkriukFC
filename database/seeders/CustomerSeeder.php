<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testis')->insert([
            'nama' => 'Pak jefri',
            'quote' => 'Alhamdulillah.. sehari bisa menjual 30 ekor ayam dan omzet perbulan bisa mencapai Rp.90.000.000.',
            'keterangan' => 'Pemilik Outlet Dkriuk Bandung'
        ]);
        DB::table('testis')->insert([
            'nama' => 'Pak Iswadi',
            'quote' => 'Dalam sehari alhamdulillah sanggup menjual rata-rata 200 ekor ayam per hari! & omset per hari 15-18 juta .',
            'keterangan' => 'Pemilik 5 Outlet Dkriuk Bekasi'
        ]);
        DB::table('testis')->insert([
            'nama' => 'Pak Arianto',
            'quote' => 'Alhamdulillah.. omzet mencapai Rp300 juta per-bulan, dan penjualan perhari 120 sampai 150 ekor ayam.',
            'keterangan' => 'Pemilik 5 Outlet Dkriuk JABODETABEK'
        ]);
    }
}
