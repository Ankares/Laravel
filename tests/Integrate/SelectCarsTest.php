<?php

namespace Tests\Feature;

use App\Models\CarsShowroom;
use App\Models\VehicleDirectory;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class SelectCarsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_db_work()
    {
        VehicleDirectory::factory()->createOne(['model'=>'Audi 100', 'year_of_production'=>2021]);
        CarsShowroom::factory()->createOne(['vehicle_id'=>'1', 'color'=>'black','price'=>'1111','sold'=>'no']);
        $this->assertDatabaseHas('cars_showrooms', ['vehicle_id'=>'1', 'color'=>'black','price'=>'1111','sold'=>'no']);
        $this->assertDatabaseHas('vehicle_directories', ['model'=>'Audi 100', 'year_of_production'=>2021]);
    }

    public function test_select_work()
    {
        VehicleDirectory::factory()->createOne(['model'=>'BMW M3', 'year_of_production'=>2020]);
        CarsShowroom::factory()->createOne(['vehicle_id'=>'1', 'color'=>'black','price'=>'2222','sold'=>'no']);
        $db_data = DB::select('select * from cars_showrooms where vehicle_id = 1');
        $db_data_price = $db_data[0]->price;
        $model_data = CarsShowroom::find($db_data[0]->id);
        $model_data_price = $model_data->price;
        $this->assertNotEmpty([$db_data, $model_data]);
        $this->assertEquals($db_data_price, $model_data_price);
    }
    
}