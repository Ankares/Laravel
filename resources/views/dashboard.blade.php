@extends('layouts/app')

@section('title')

    Dashboard

@endsection

@section('content')

    @extends('layouts/navigation')
    <div class="container mx-auto mt-14">
        <h1 class="text-center text-5xl mb-10">Cars Sales Information</h1>
        <div class="w-10/12 mx-auto bg-gray-200 shadow-md rounded px-8 pt-6 pb-8 mb-5 text-xl">

            <div class="mb-5">
                Average price of sold cars ever: 
                <span class="hover:text-blue-500 font-bold cursor-pointer">
                    {{$data['avgPriceOfSoldCars']}} $
                </span>
            </div>

            <div class="mb-5">
                Average price of cars sold today: 
                <span class="hover:text-blue-500 font-bold cursor-pointer">
                    {{$data['avgPriceOfTodaySales']}} $
                </span>
            </div>

            Cars sales divided by day: 
            <div class="table mx-auto mb-5">
                <table class="table-auto text-left">
                    <thead>
                    <tr>
                        <th class="w-40">Date</th>
                        <th>Cars sold</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['carsSalesByDay'] as $carsSalesByDay)
                            <tr>
                                <td>{{$carsSalesByDay['sale_date']}}</td>
                                <td>{{$carsSalesByDay['count(id)']}}</td>
                            </tr>                    
                        @endforeach
                    </tbody>
                </table> 
            </div> 

            Unsold cars: 
            <div class="table mx-auto mb-5">
                <table class="table-auto text-left">
                    <thead>
                    <tr>
                        <th class="w-52">Car Model</th>
                        <th class="w-40">Year of production</th>
                        <th class="w-24">Color</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['unsoldCars'] as $car)
                            <tr>
                                <td>{{$car['model']}}</td>
                                <td>{{$car['year_of_production']}}</td>
                                <td>{{$car['color']}}</td>
                                <td>{{$car['price']}}</td>
                            </tr>                    
                        @endforeach
                    </tbody>
                </table> 
            </div> 

            <div class="mt-5">
                Sold models:
                @foreach ($data['soldModels'] as $car)
                    <li>
                        {{$car['model'] . ', ' . $car['year_of_production']}}
                    </li>
                @endforeach
            </div>
           
            
        </div>
    </div>
       
@endsection
