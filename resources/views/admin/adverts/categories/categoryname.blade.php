@extends('layouts.app')

@section('content')
    @include('admin.adverts.categories._nav')

    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.adverts.categories.edit', $category) }}" class="btn btn-primary mr-1">Edit</a>
        <form method="POST" action="{{ route('admin.adverts.categories.destroy', $category) }}" class="mr-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>

    <table class="table table-bordered table-striped">
        <tbody>
        <tr>
            <th>ID</th><td>{{ $category->id }}</td>
        </tr>
        <tr>
            <th>Name Arm</th><td>{{ $category->name_am }}</td>
        </tr>
        <tr>
            <th>Name Rus</th><td>{{ $category->name_ru }}</td>
        </tr>
        <tr>
            <th>Name Eng</th><td>{{ $category->name_en }}</td>
        </tr>
        <tr>
            <th>Slug</th><td>{{ $category->slug }}</td>
        </tr>
        <tbody>
        </tbody>
    </table>

    <p><a href="{{ route('admin.adverts.categories.attributes.create', $category) }}" class="btn btn-success">Add Attribute</a></p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Sort</th>
            <th>Name_Arm</th>
            <th>Name_Rus</th>
            <th>Name_Eng</th>
            <th>Slug</th>
            <th>Required</th>
        </tr>
        </thead>
        <tbody>

        <tr><th colspan="4">Parent attributes</th></tr>

        @forelse ($parentAttributes as $attribute)

            <tr>
                <td>{{ $attribute->sort }}</td>
                <td>{{ $attribute->name_am }}</td>
                <td>{{ $attribute->name_ru }}</td>
                <td>{{ $attribute->name_en }}</td>
                <td>{{ $attribute->type }}</td>
                <td>{{ $attribute->required ? 'Yes' : '' }}</td>
            </tr>
        @empty
            <tr><td colspan="4">None</td></tr>
        @endforelse

        <tr><th colspan="4">Own attributes</th></tr>

        @forelse ($attributes as $attribute)
            <tr>
                <td>{{ $attribute->sort }}</td>
                <td>
                    <a href="{{ route('admin.adverts.categories.attributes.show', [$category, $attribute]) }}">{{ $attribute->name_am }}</a>
                </td>
                <td>
                    <a href="{{ route('admin.adverts.categories.attributes.show', [$category, $attribute]) }}">{{ $attribute->name_ru }}</a>
                </td>
                <td>
                    <a href="{{ route('admin.adverts.categories.attributes.show', [$category, $attribute]) }}">{{ $attribute->name_en }}</a>
                </td>
                <td>{{ $attribute->type }}</td>
                <td>{{ $attribute->required ? 'Yes' : 'No' }}</td>
            </tr>
        @empty
            <tr><td colspan="4">None</td></tr>
        @endforelse

        </tbody>
    </table>
@endsection
