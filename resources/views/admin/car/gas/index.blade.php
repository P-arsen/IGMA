@extends('layouts.app')

@section('content')
    @include('admin.car.gas._nav')
    <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
        <p><a href="{{ route('admin.car.gas.create') }}" class="btn btn-success">Ավելացնել Հատկություն</a></p>

    @include('admin.car.gas._list', ['cargas' => $cargas])
@endsection
