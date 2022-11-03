<?php

namespace App\Services;

use App\Repositories\CarsRepository;

class CarsDisplayingService 
{
    private $cars = null;

    public function __construct(
        private readonly CarsRepository $carsRepository
    )
    {
        $this->cars = $this->carsRepository->getAllCarsInfo();
    }

    public function getAllInformationAboutCars() : array {
        
        $avgPriceOfSoldCars = $this->getAvgPriceOfSoldCars();
        $avgPriceOfTodaysSales = $this->getAvgPriceOfTodaysSales();
        $carsSalesByDay = $this->groupCarsSalesByDay();
        $unsoldCars = $this->getAllUnsoldCars();
        $soldCars = $this->getAllSoldCars();

        return [
            'avgPriceOfSoldCars' => $avgPriceOfSoldCars,
            'avgPriceOfTodaysSales' => $avgPriceOfTodaysSales,
            'carsSalesByDay' => $carsSalesByDay,
            'unsoldCars' => $unsoldCars,
            'soldCars' => $soldCars
        ];
    }

    private function getAvgPriceOfSoldCars(): int
    {
        $averagePriceOfSoldCars = 0;
        $totalPriceOfSoldCars = 0;
        $totalSoldCars = 0;
        foreach($this->cars as $car) {
            if ($car['sold'] === 'yes') {
                $totalPriceOfSoldCars += $car['price'];
                $totalSoldCars++;
            }
        }
        $averagePriceOfSoldCars = $totalPriceOfSoldCars / $totalSoldCars;

        return $averagePriceOfSoldCars;
    }

    private function groupCarsSalesByDay() : array
    {
        $dayCarSales = [];
        foreach ($this->cars as $car) {
            if ($car['sale_date']) {
                if (isset($dayCarSales[$car['sale_date']])) {
                    $dayCarSales[$car['sale_date']] += 1;
                } else {
                    $dayCarSales += [$car['sale_date'] => 1];
                }
            }
        }
        krsort($dayCarSales);

        return $dayCarSales;
    }

    private function getAvgPriceOfTodaysSales() : int
    {
        $avegarePriceOfTodaysSales = 0;
        $totalPriceOfTodaysSales = 0;
        $totalSoldCars = 0;
        foreach($this->cars as $car) {
            if ($car['sold'] === 'yes' && $car['sale_date'] === date('Y-m-d')) {
                $totalPriceOfTodaysSales += $car['price'];
                $totalSoldCars++;
            }
        }
        if ($totalSoldCars > 0) {
            $avegarePriceOfTodaysSales = $totalPriceOfTodaysSales / $totalSoldCars;
        }

        return $avegarePriceOfTodaysSales;
    }

    private function getAllUnsoldCars() : array
    {
        $unsoldCars = [];
        foreach($this->cars as $car) {
            if (!$car['sale_date']) {
                $unsoldCars[] = $car;
            }
        }

        return $unsoldCars;
    }

    private function getAllSoldCars() : array
    {
        $soldCars = [];
        foreach($this->cars as $car) {
            if ($car['sale_date']) {
                $soldCars[] = $car;
            }
        }

        return $soldCars;
    }
}