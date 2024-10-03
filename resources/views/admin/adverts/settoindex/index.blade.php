
@extends('layouts.app')

@section('content')
    @include('admin.adverts.categories._nav')
    <div class="container">
        <form action="" enctype="multipart/form-data" method="post"></form>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{$category['id']}}">{{$category['name_am']}}</option>
            @endforeach
        </select>
        @foreach($categoriesFilter as $category)
            @php
            dd($category);
                @endphp
            <input
                type="checkbox"
                id="subscribeNews_{{ $category['id'] }}"
            name="categories[]"
            value="{{ $category->id }}" /> <!-- Use the category ID for value -->
            <label for="subscribeNews_{{ $category->id }}">{{ $category->name }}</label> <!-- Display the category name -->
        @endforeach
    </div>

@endsection
