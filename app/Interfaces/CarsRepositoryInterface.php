<?php

namespace App\Interfaces;

interface CarsRepositoryInterface
{
    public function getAvgPriceOfSoldCars(): int;
    public function getAvgPriceOfTodaySales(): int;
    public function groupCarsSalesByDay();
    public function getUnsoldCars();
    public function getSoldCarModels();
}
