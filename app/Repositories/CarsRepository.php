<?php

namespace App\Repositories;

use App\Models\CarsShowroom;
use App\Interfaces\CarsRepositoryInterface;

class CarsRepository implements CarsRepositoryInterface
{
    public function getAvgPriceOfSoldCars(): int
    {
        $averagePriceOfSoldCars = CarsShowroom::query()->with('vehicleDirectory')->where('sold', 'yes')->avg('price');

        return round($averagePriceOfSoldCars);
    }

    public function getAvgPriceOfTodaySales(): int
    {
        $averagePriceOfTodaySales = CarsShowroom::query()->with('vehicleDirectory')->where('sale_date', date('Y-m-d'))->avg('price');

        return round($averagePriceOfTodaySales);
    }

    public function groupCarsSalesByDay()
    {
        $dayCarSales = CarsShowroom::query()->whereNotNull('sale_date')->selectRaw('sale_date')->selectRaw('count(id)')->groupBy('sale_date')->orderBy('sale_date', 'desc')->limit(100)->get();

        return $dayCarSales;
    }

    public function getUnsoldCars()
    {
        $unsoldCars = CarsShowroom::query()->join('vehicle_directories', 'vehicle_id', '=', 'vehicle_directories.id')->where('sold', 'no')->orderBy('year_of_production', 'desc')->orderBy('price', 'asc')->limit(100)->get();

        return $unsoldCars;
    }

    public function getSoldCarModels()
    {
        $soldModels = CarsShowroom::query()->join('vehicle_directories', 'vehicle_id', '=', 'vehicle_directories.id')->select('model', 'year_of_production')->where('sold', 'yes')->limit(100)->get();

        return $soldModels;
    }
}
