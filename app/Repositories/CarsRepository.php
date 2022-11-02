<?php

namespace App\Repositories;

use App\Interfaces\CarsRepositoryInterface;
use App\Models\CarsShowroom;

class CarsRepository implements CarsRepositoryInterface
{
    public function getAllCarsInfo() {
        // lazy load
        $cars = CarsShowroom::with(['vehicleDirectory' => function ($query) {
            $query->orderBy('year_of_production', 'desc');
        }])->orderBy('price', 'asc')->get();
        return $cars;
    }
}