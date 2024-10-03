@extends('layouts.app')

@section('content')
    @include('admin.regions._nav')
    <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.regions.edit', $region) }}" class="btn btn-primary mr-1">Խմբագրել</a>
        <form method="POST" action="{{ route('admin.regions.update', $region) }}" class="mr-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Հեռացնել</button>
        </form>
    </div>

    <table class="table table-bordered table-striped">
        <tbody>
        <tr>
            <th>ID</th><td>{{ $region->id }}</td>
        </tr>
        <tr>
            <th>Անվանում Հայերեն</th><td>{{ $region->name_am }}</td>
        </tr>
        <tr>
            <th>Անվանում Ռուսերեն</th><td>{{ $region->name_ru }}</td>
        </tr>
        <tr>
            <th>Անվանում Անգլերեն</th><td>{{ $region->name_en }}</td>
        </tr>
        <tr>
            <th>Slug</th><td>{{ $region->slug }}</td>
        </tr>
        </tbody>
    </table>

    <p><a href="{{ route('admin.regions.create', ['parent' => $region->id]) }}" class="btn btn-success">Ավելացնել Բնակավայր</a></p>
    @include('admin.regions._list', ['regions' => $regions])
    </div>
@endsection
