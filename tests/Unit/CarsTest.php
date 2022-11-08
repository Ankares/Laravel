<?php

namespace Tests\Feature;

use App\Repositories\CarsRepository;
use App\Services\CarsDisplayingService;
use Tests\TestCase;

class CarsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_instanseExist()
    {
        $mock = $this->getMockBuilder('CarsDisplayingService')->getMock();
        $this->assertInstanceOf('CarsDisplayingService', $mock);
      
    }

    public function test_serviceMethod()
    {
        $mock = $this->getMockBuilder(CarsRepository::class)->getMock();
       
        $mock->expects($this->once())->method('getAvgPriceOfSoldCars');
        $mock->expects($this->once())->method('getAvgPriceOfTodaySales');
        $mock->expects($this->once())->method('groupCarsSalesByDay');
        $mock->expects($this->once())->method('getUnsoldCars');
        $mock->expects($this->once())->method('getSoldCarModels');

        $cars = new CarsDisplayingService($mock);
        $data = $cars->getAllCarsInfo();

        $this->assertNotEmpty($data);
        $this->assertIsArray($data);
        $this->assertCount(5, $data);
        $this->assertArrayHasKey('avgPriceOfSoldCars', $data);
        $this->assertArrayHasKey('avgPriceOfTodaySales', $data);
        $this->assertArrayHasKey('carsSalesByDay', $data);
        $this->assertArrayHasKey('unsoldCars', $data);
        $this->assertArrayHasKey('soldModels', $data);

    }
}
