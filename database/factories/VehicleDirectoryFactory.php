<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleDirectory>
 */
class VehicleDirectoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cars = [
            'Renault Logan',
            'Hyundai Solaris',
            'KIA Rio',
            'Audi A6',
            'LADA Vesta',
            'LADA Granta',
            'Renault Sandero',
            'BMW M4',
            'Hyundai Creta',
            'Geely Atlas',
            'Mercedes-Benz X-class',
            'Mercedes-Benz E-class',
            'Great Wall Poer',
            'Lada Largus',
            'Chery Tiggo 8',
            'Honda City',
            'Audi S1',
            'BMW M3',
            'Mercedes-Benz C217',
            'Volkswagen Polo',
            'Skoda Fabia',
            'Peugeot 308',
            'Mercedes-Benz W221',
            'Ford Fiesta',
            'Volkswagen Passat',
            'Audi A8',
        ];

        return [
            'model' => fake()->randomElement($cars),
            'year_of_production' => fake()->numberBetween(2014, 2022),
        ];
    }
}
