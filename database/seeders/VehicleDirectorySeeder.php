<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleDirectorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_directories')->insert([
            [
                'model' => 'Renault Logan',
                'year_of_production' => '2018',
            ],
            [
                'model' => 'Hyundai Solaris',
                'year_of_production' => '2017',
            ],
            [
                'model' => 'KIA Rio',
                'year_of_production' => '2020',
            ],
            [
                'model' => 'LADA Vesta',
                'year_of_production' => '2015',
            ], 
            [
                'model' => 'Renault Duster',
                'year_of_production' => '2021',
            ],
            [
                'model' => 'LADA Granta',
                'year_of_production' => '2018',
            ],
            [
                'model' => 'Renault Sandero',
                'year_of_production' => '2018',
            ],
            [
                'model' => 'Hyundai Creta',
                'year_of_production' => '2019',
            ],
            [
                'model' => 'Geely Atlas',
                'year_of_production' => '2019',
            ],
            [
                'model' => 'Great Wall Poer',
                'year_of_production' => '2019',
            ],
            [
                'model' => 'Lada Largus',
                'year_of_production' => '2021',
            ],
            [
                'model' => 'Chery Tiggo 8',
                'year_of_production' => '2022',
            ],
            [
                'model' => 'Honda City',
                'year_of_production' => '2019',
            ],
            [
                'model' => 'Volkswagen Polo',
                'year_of_production' => '2020',
            ],
            [
                'model' => 'Skoda Fabia',
                'year_of_production' => '2017',
            ],
            [
                'model' => 'Peugeot 308',
                'year_of_production' => '2020',
            ],
            [
                'model' => 'Ford Fiesta',
                'year_of_production' => '2018',
            ],
            [
                'model' => 'Volkswagen Passat',
                'year_of_production' => '2022',
            ],
        ]);
    }
}
