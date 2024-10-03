@extends('layouts.app')

@section('content')
    @include('admin.regions._nav')
    <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <form method="POST" action="{{ route('admin.regions.update', $region) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name" class="col-form-label">Անվանում Հայերեն</label>
            <input id="name" class="form-control{{ $errors->has('name_am') ? ' is-invalid' : '' }}" name="name_am" value="{{ old('name_am', $region->name_am) }}" required>
            @if ($errors->has('name_am'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name_am') }}</strong></span>
            @endif

            <label for="name" class="col-form-label">Անվանում Ռուսերեն</label>
            <input id="name" class="form-control{{ $errors->has('name_ru') ? ' is-invalid' : '' }}" name="name_ru" value="{{ old('name_ru', $region->name_ru) }}" required>
            @if ($errors->has('name_ru'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name_ru') }}</strong></span>
            @endif

            <label for="name" class="col-form-label">Անվանում Անգլերեն</label>
            <input id="name" class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}" name="name_en" value="{{ old('name_en', $region->name_en) }}" required>
            @if ($errors->has('name_en'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name_en') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="slug" class="col-form-label">Slug</label>
            <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug', $region->slug) }}" required>
            @if ($errors->has('slug'))
                <span class="invalid-feedback"><strong>{{ $errors->first('slug') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="parent" class="col-form-label">Տարածաշրջան</label>
            <select id="parent" class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" name="parent_id">
{{--                <option value="{{$regions[$region->parent_id]['id']}}" selected>{{$regions[$region->parent_id -1]['name_am']}}</option>--}}
                @foreach ($regions as $parent)

                        <option value="{{ $parent->id }}">
                            {{ $parent->name_am }}
                        </option>
                @endforeach;
            </select>
            @if ($errors->has('parent'))
                <span class="invalid-feedback"><strong>{{ $errors->first('parent') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Հաստատել</button>
        </div>
    </form>
@endsection
