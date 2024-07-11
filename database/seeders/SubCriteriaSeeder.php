<?php

namespace Database\Seeders;

use App\Models\SubCriteria;
use Illuminate\Database\Seeder;

class SubCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCriteria::create([
            'code' => 'C11',
            'name' => 'Rating_Gmaps',
            'nilaik' => '4.5 - 5.0',
            'nilaib' => '5',
        ]);
        SubCriteria::create([
            'code' => 'C12',
            'name' => 'Rating_Gmaps',
            'nilaik' => '4.0 - 4.4',
            'nilaib' => '4',
        ]);
        SubCriteria::create([
            'code' => 'C13',
            'name' => 'Rating_Gmaps',
            'nilaik' => '3.5 - 3.9',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'C14',
            'name' => 'Rating_Gmaps',
            'nilaik' => '3.0 - 3.4',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'C15',
            'name' => 'Rating_Gmaps',
            'nilaik' => '< 3.0',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'C21',
            'name' => 'Harga',
            'nilaik' => 'Murah (Rp0 - Rp500.000)',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'C22',
            'name' => 'Harga',
            'nilaik' => 'Terjangkau (Rp500.001 - Rp1.000.000)',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'C23',
            'name' => 'Harga',
            'nilaik' => 'Sedang (Rp1.000.001 - Rp1.500.000)',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'C24',
            'name' => 'Harga',
            'nilaik' => 'Mahal (Rp1.500.001 - Rp2.000.000)',
            'nilaib' => '4',
        ]);
        SubCriteria::create([
            'code' => 'C25',
            'name' => 'Harga',
            'nilaik' => 'Sangat Mahal (> Rp2.000.000)',
            'nilaib' => '5',
        ]);
        SubCriteria::create([
            'code' => 'C31',
            'name' => 'Fasilitas',
            'nilaik' => 'Sangat Lengkap (1-6)',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'C32',
            'name' => 'Fasilitas',
            'nilaik' => 'Lengkap (1-4)',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'C33',
            'name' => 'Fasilitas',
            'nilaik' => 'Tidak Lengkap (1-2))',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'C41',
            'name' => 'Layanan_Checkup',
            'nilaik' => 'Ada',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'C42',
            'name' => 'Layanan_Checkup',
            'nilaik' => 'Tidak Ada',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'C51',
            'name' => 'Ketersediaan_Softlen',
            'nilaik' => 'Ada',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'C52',
            'name' => 'Ketersediaan_Softlen',
            'nilaik' => 'Tidak Ada',
            'nilaib' => '1',
        ]);
        
    }
}
