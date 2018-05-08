<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = ['Malang', 'Surabaya', 'Jakarta', 'Bandung'];

        for ($i = 0; $i < count($cities); $i++) {
            City::create(['name' => $cities[$i]]);
        }
    }
}
