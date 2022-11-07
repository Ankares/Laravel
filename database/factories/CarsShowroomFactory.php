<?php

namespace Database\Factories;

use App\Models\VehicleDirectory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarsShowroom>
 */
class CarsShowroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $carInfo = [
            'vehicle_id' => VehicleDirectory::factory(),
            'color' => fake()->randomElement(['black', 'cream', 'white', 'red', 'orange', 'brown']),
            'price' => fake()->numberBetween(6000, 35000),
            'sold' => fake()->randomElement(['yes', 'no']),
        ];

        if ($carInfo['sold'] === 'yes') {
            $carInfo['sale_date'] = fake()->dateTimeBetween('-1 year', 'now');
        } else {
            $carInfo['sale_date'] = null;
        }

        return $carInfo;
    }
}
