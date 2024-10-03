@extends('layouts.app')

@section('content')
    @include('admin.adverts.categories._nav')

    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.adverts.categories.attributes.edit', [$category, $attribute]) }}" class="btn btn-primary mr-1">Edit</a>
        <form method="POST" action="{{ route('admin.adverts.categories.attributes.destroy', [$category, $attribute]) }}" class="mr-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>

    <table class="table table-bordered table-striped">
        <tbody>
        <tr>
            <th>ID</th><td>{{ $attribute->id }}</td>
        </tr>
        <tr>
            <th>Name Arm</th><td>{{ $attribute->name_am }}</td>
        </tr>
        <tr>
            <th>Name Rus</th><td>{{ $attribute->name_ru }}</td>
        </tr>
        <tr>
            <th>Name Eng</th><td>{{ $attribute->name_en }}</td>
        </tr>
        <tr>
            <th>Type</th><td>{{ $attribute->type }}</td>
        </tr><tr>
            <th>Required</th><td>{{ $attribute->required }}</td>
        </tr>
        <tbody>
        </tbody>
    </table>
@endsection
