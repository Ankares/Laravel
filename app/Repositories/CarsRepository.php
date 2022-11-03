<?php

namespace App\Repositories;

use App\Interfaces\CarsRepositoryInterface;
use App\Models\CarsShowroom;

class CarsRepository implements CarsRepositoryInterface
{
    public function getAllCarsInfo() {
        //with lazy loading
        $cars = CarsShowroom::query()->with(['vehicleDirectory'])->leftJoin('vehicle_directories', 'vehicle_id', '=', 'vehicle_directories.id')->orderBy('year_of_production', 'desc')->orderBy('price', 'asc')->get();
        
        return $cars;
    }
}