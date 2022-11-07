<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarsShowroom;

class CarsShowroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarsShowroom::factory()->count(50)->create();
    }
}
