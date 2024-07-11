<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Criteria::create([
            'code' => 'C1',
            'name' => 'Rating Gmaps'
        ]);
        Criteria::create([
            'code' => 'C2',
            'name' => 'Harga'
        ]);
        Criteria::create([
            'code' => 'C3',
            'name' => 'Fasilitas'
        ]);
        Criteria::create([
            'code' => 'C4',
            'name' => 'Layanan Checkup'
        ]);
        Criteria::create([
            'code' => 'C5',
            'name' => 'Ketersediaan Softlen'
        ]);
    }
}
