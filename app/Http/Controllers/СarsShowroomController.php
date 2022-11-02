<?php

namespace App\Http\Controllers;

use App\Repositories\CarsRepository;

class СarsShowroomController extends Controller
{
    public function __construct(
        private readonly CarsRepository $carsRepository
    )
    {}

    public function show()
    {
        $cars = $this->carsRepository->getAllCarsInfo();
        return view('dashboard', ['cars' => $cars]);
    }
}
