<?php

namespace App\Http\Controllers;

use App\Services\CarsDisplayingService;

class СarsShowroomController extends Controller
{
    public function show(CarsDisplayingService $carsService)
    {
        $data = $carsService->getAllCarsInfo();

        return view('dashboard', ['data' => $data]);
    }
}
