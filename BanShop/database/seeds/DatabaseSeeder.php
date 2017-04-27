<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bans')->insert(['id_ban' => 'ACS001', 'nama_ban' => 'Achilles - ATR Sport', 'merek' => 'Achilles', 'path_gambar' => 'img/acs001.png', 'simbol_kecepatan' => 'V', 'indeks_muatan' => '91', 'harga' => 570000, 'profil' => 55, 'lebar' => 205, 'diameter' => 16, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('bans')->insert(['id_ban' => 'BRD001', 'nama_ban' => 'Bridgestone Turanza AR20', 'merek' => 'Bridgestone', 'path_gambar' => 'img/brd001.png', 'simbol_kecepatan' => 'V', 'indeks_muatan' => '91', 'harga' => 975000, 'profil' => 55, 'lebar' => 205, 'diameter' => 16, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('bans')->insert(['id_ban' => 'MCH001', 'nama_ban' => 'Michelin Primacy 3 ST', 'merek' => 'Michelin', 'path_gambar' => 'img/mch001.png', 'simbol_kecepatan' => 'W', 'indeks_muatan' => '91', 'harga' => 1075000, 'profil' => 55, 'lebar' => 205, 'diameter' => 16, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('bans')->insert(['id_ban' => 'DNL001', 'nama_ban' => 'Dunlop Direzza DZ101', 'merek' => 'Dunlop', 'path_gambar' => 'img/dnl001.png', 'simbol_kecepatan' => 'V', 'indeks_muatan' => '91', 'harga' => 935000, 'profil' => 55, 'lebar' => 205, 'diameter' => 16, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('bans')->insert(['id_ban' => 'DNL002', 'nama_ban' => 'Dunlop SP Sport LM704', 'merek' => 'Dunlop', 'path_gambar' => 'img/dnl002.png', 'simbol_kecepatan' => 'V', 'indeks_muatan' => '91', 'harga' => 866000, 'profil' => 55, 'lebar' => 205, 'diameter' => 16, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('bans')->insert(['id_ban' => 'ACC001', 'nama_ban' => 'Accelera PHI', 'merek' => 'Accelera', 'path_gambar' => 'img/banreal.png', 'simbol_kecepatan' => 'W', 'indeks_muatan' => '94', 'harga' => 600000, 'profil' => 55, 'lebar' => 205, 'diameter' => 16, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('bans')->insert(['id_ban' => 'GTR001', 'nama_ban' => 'GT Radial Champiro HPY', 'merek' => 'GT Radial', 'path_gambar' => 'img/banreal.png', 'simbol_kecepatan' => 'Z', 'indeks_muatan' => '91', 'harga' => 780000, 'profil' => 55, 'lebar' => 205, 'diameter' => 16, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        // $this->call(UsersTableSeeder::class);
    }
}
