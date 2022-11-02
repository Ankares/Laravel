@extends('layouts/app')

@section('title')

    Dashboard

@endsection

@section('content')

    @extends('layouts/navigation')
    <div class="container mx-auto">
        {{$cars}}
    </div>
       
@endsection
