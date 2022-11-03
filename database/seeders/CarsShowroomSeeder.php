<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsShowroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars_showrooms')->insert([
            [
                'vehicle_id' => 1,
                'color' => 'black',
                'price' => 11350,
                'sold' => 'no',
                'sale_date' => null
            ],
            [   'vehicle_id' => 2,
                'color' => 'blue',
                'price' => 9800,
                'sold' => 'no',
                'sale_date' => null
            ],
            [
                'vehicle_id' => 3,
                'color' => 'red',
                'price' => 18400,
                'sold' => 'yes',
                'sale_date' => date('2022-10-08')
            ],
            [
                'vehicle_id' => 4,
                'color' => 'brown',
                'price' => 6600,
                'sold' => 'yes',
                'sale_date' => date('2022-09-20')
            ],
            [
                'vehicle_id' => 5,
                'color' => 'cream',
                'price' => 31000,
                'sold' => 'no',
                'sale_date' => null
            ],
            [
                'vehicle_id' => 6,
                'color' => 'orange',
                'price' => 8000,
                'sold' => 'yes',
                'sale_date' => date('2022-09-20')
            ],
            [
                'vehicle_id' => 7,
                'color' => 'red',
                'price' => 6600,
                'sold' => 'no',
                'sale_date' => null
            ],
            [
                'vehicle_id' => 8,
                'color' => 'white',
                'price' => 19700,
                'sold' => 'yes',
                'sale_date' => date('2021-07-20')
            ],
            [
                'vehicle_id' => 9,
                'color' => 'white',
                'price' => 25000,
                'sold' => 'no',
                'sale_date' => null
            ],
            [
                'vehicle_id' => 10,
                'color' => 'brown',
                'price' => 19400,
                'sold' => 'no',
                'sale_date' => null
            ],
            [
                'vehicle_id' => 11,
                'color' => 'orange',
                'price' => 25350,
                'sold' => 'no',
                'sale_date' => null
            ],
            [
                'vehicle_id' => 12,
                'color' => 'black',
                'price' => 17200,
                'sold' => 'no',
                'sale_date' => null
            ],
            [
                'vehicle_id' => 13,
                'color' => 'white',
                'price' => 21750,
                'sold' => 'yes',
                'sale_date' => date('2021-12-30')
            ],
            [
                'vehicle_id' => 14,
                'color' => 'black',
                'price' => 13500,
                'sold' => 'no',
                'sale_date' => null
            ],
            [
                'vehicle_id' => 15,
                'color' => 'cream',
                'price' => 14650,
                'sold' => 'no',
                'sale_date' => null
            ],
            [
                'vehicle_id' => 16,
                'color' => 'blue',
                'price' => 20200,
                'sold' => 'yes',
                'sale_date' => date('2021-03-03')
            ],
            [
                'vehicle_id' => 17,
                'color' => 'white',
                'price' => 15100,
                'sold' => 'no',
                'sale_date' => null
            ],
            [
                'vehicle_id' => 18,
                'color' => 'white',
                'price' => 27900,
                'sold' => 'yes',
                'sale_date' => date('2022-05-29')
            ],
        ]);
    }
}
