@extends('layouts.app')

@section('content')
    @include('admin.regions._nav')
    <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <p><a href="{{ route('admin.regions.create') }}" class="btn btn-success">Ավելացնել Տարածաշրջան</a></p>

    @include('admin.regions._list', ['regions' => $regions])
@endsection
