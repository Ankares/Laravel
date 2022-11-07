<?php

namespace App\Services;

use App\Repositories\CarsRepository;

class CarsDisplayingService
{
    public function __construct(
        private readonly CarsRepository $carsRepository
    ) {
    }

    public function getAllCarsInfo()
    {
        $avgPriceOfSoldCars = $this->carsRepository->getAvgPriceOfSoldCars();
        $avgPriceOfTodaySales = $this->carsRepository->getAvgPriceOfTodaySales();
        $carsSalesByDay = $this->carsRepository->groupCarsSalesByDay();
        $unsoldCars = $this->carsRepository->getUnsoldCars();
        $soldModels = $this->carsRepository->getSoldCarModels();

        return [
            'avgPriceOfSoldCars' => $avgPriceOfSoldCars,
            'avgPriceOfTodaySales' => $avgPriceOfTodaySales,
            'carsSalesByDay' => $carsSalesByDay,
            'unsoldCars' => $unsoldCars,
            'soldModels' => $soldModels,
        ];
    }
}
