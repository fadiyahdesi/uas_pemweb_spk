<?php

namespace Database\Seeders;
use App\Models\Alternative;
use Illuminate\Database\Seeder;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alternative::create([
            'nama' => 'Optik Kustin Tegal',
            'alamat' => 'Jl. AR. Hakim No.173, Mangkukusuman, Kota Tegal',
        ]);
        Alternative::create([
            'nama' => 'Optik FaVaa',
            'alamat' => 'Jl. Professor Muhammad Yamin Dk No.31, Pakembaran Slawi',
        ]);
        Alternative::create([
            'nama' => 'Optik B. Riski Tegal',
            'alamat' => 'Jl. Jatibarang - Slawi No.21, Budimulya Slawi',
        ]);
        Alternative::create([
            'nama' => 'Optik Tegal Aziz',
            'alamat' => 'Jl. AR. Hakim No.197, Kejambon Kota Tegal',
        ]);
        Alternative::create([
            'nama' => 'Optik Melawai',
            'alamat' => 'Pacific Mall Lt. GF. 1-2, Jl. Mayjend Sutoyo No.1, Pekauman Kota Tegal',
        ]);
    }
}
