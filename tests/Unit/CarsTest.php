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
        $mock = $this->mock(CarsRepository::class);
       
        $mock->expects()->getAvgPriceOfSoldCars()->andReturn('1');
        $mock->expects()->getAvgPriceOfTodaySales()->andReturn('2');
        $mock->expects()->groupCarsSalesByDay()->andReturn('3');
        $mock->expects()->getUnsoldCars()->andReturn('4');
        $mock->expects()->getSoldCarModels()->andReturn('5');

        $cars = new CarsDisplayingService($mock);
        $data = $cars->getAllCarsInfo();

        $this->assertNotEmpty($data);
        $this->assertIsArray($data);
        $this->assertCount(5, $data);
        $this->assertEquals('1', $data['avgPriceOfSoldCars']);
        $this->assertEquals('2', $data['avgPriceOfTodaySales']);
        $this->assertEquals('3', $data['carsSalesByDay']);
        $this->assertEquals('4', $data['unsoldCars']);
        $this->assertEquals('5', $data['soldModels']);
    }
}
