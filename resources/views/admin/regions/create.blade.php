@extends('layouts.app')

@section('content')
    @include('admin.regions._nav')

    <form method="POST" action="{{ route('admin.regions.store', ['parent' => $parent ? $parent->id : null]) }}">
        @csrf

        <div class="form-group">
            <label for="name" class="col-form-label">Անվանումը Հայերեն</label>
            <input id="name" class="form-control{{ $errors->has('name_am') ? ' is-invalid' : '' }}" name="name_am" value="{{ old('name_am') }}" required>
            @if ($errors->has('name_am'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name_am') }}</strong></span>
            @endif
            <label for="name" class="col-form-label">Անվանում Ռուսերեն</label>
            <input id="name" class="form-control{{ $errors->has('name_ru') ? ' is-invalid' : '' }}" name="name_ru" value="{{ old('name_ru') }}" required>
            @if ($errors->has('name_ru'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name_ru') }}</strong></span>
            @endif
            <label for="name" class="col-form-label">Անվանումը Անգլերեն</label>
            <input id="name" class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}" name="name_en" value="{{ old('name_en') }}" required>
            @if ($errors->has('name_en'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name_en') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="slug" class="col-form-label">Slug</label>
            <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug') }}" required>
            @if ($errors->has('slug'))
                <span class="invalid-feedback"><strong>{{ $errors->first('slug') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="parent" class="col-form-label">Տարածաշրջան</label>
            <select id="parent" class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" name="parent_id">
                <option value=""></option>
                @foreach ($regions as $parent)
                    {{--            //        @if($parent->parent_id   != null)--}}
                    <option value="{{ $parent->id }}"{{ $parent->id == old('parent', $parent->parent_id) ? ' selected' : '' }}>
                        {{ $parent->name_am }} {{$parent->id}}
                    </option>
                    {{--                    @endif--}}
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
