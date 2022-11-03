<?php

namespace App\Http\Controllers;

use App\Services\CarsDisplayingService;

class СarsShowroomController extends Controller
{
    public function __construct(
        private readonly CarsDisplayingService $carService
    )
    {}

    public function show()
    {
        $data = $this->carService->getAllInformationAboutCars();
        return view('dashboard', ['data' => $data]);
    }
}
