<?php

namespace App\Http\Controllers;

use App\Services\CarsDisplayingService;

class –°arsShowroomController extends Controller
{
    public function show(CarsDisplayingService $carsService)
    {
        $data = $carsService->getAllCarsInfo();

        return view('dashboard', ['data' => $data]);
    }
}
