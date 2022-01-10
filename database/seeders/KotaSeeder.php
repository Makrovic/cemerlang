<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $daftarProvinsi = RajaOngkir::provinsi()->all();
        $kota = collect();
        foreach ($daftarProvinsi as $dProvinsi) {
            $daftarKota = RajaOngkir::kota()->dariProvinsi($dProvinsi['province_id'])->get();
            foreach ($daftarKota as $dKota) {
                // $kota->push(['province_id' => $dProvinsi['province_id'], 'province_name' => $dProvinsi['province'], 'city_id' => $dKota['city_id'], 'city_name' => $dKota['city_name']]);
                DB::table('kotas')->insert([
                    'province_id' => $dProvinsi['province_id'],
                    'province_name' => $dProvinsi['province'],
                    'city_id' => $dKota['city_id'],
                    'city_type' => $dKota['type'],
                    'city_name' => $dKota['city_name']
                ]);
            }
        }
    }
}
