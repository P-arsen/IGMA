@extends('layouts.app')

@section('content')
    @include('admin.adverts.categories._nav')

    <form method="POST" action="{{ route('admin.adverts.categories.attributes.store', $category) }}">
        @csrf

        <div class="form-group">
            <label for="name_am" class="col-form-label">Name Arm</label>
            <input id="name" class="form-control{{ $errors->has('name_am') ? ' is-invalid' : '' }}" name="name_am" value="{{ old('name_am') }}" required>
            @if ($errors->has('name_am'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name_am') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="name_ru" class="col-form-label">Name Rus</label>
            <input id="name" class="form-control{{ $errors->has('name_ru') ? ' is-invalid' : '' }}" name="name_ru" value="{{ old('name_ru') }}" required>
            @if ($errors->has('name_ru'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name_ru') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="name_en" class="col-form-label">Name Eng</label>
            <input id="name" class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}" name="name_en" value="{{ old('name_en') }}" required>
            @if ($errors->has('name_en'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name_am') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="sort" class="col-form-label">Sort</label>
            <input id="sort" type="text" class="form-control{{ $errors->has('sort') ? ' is-invalid' : '' }}" name="sort" value="{{ old('sort') }}" required>
            @if ($errors->has('sort'))
                <span class="invalid-feedback"><strong>{{ $errors->first('sort') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="type" class="col-form-label">Type</label>
            <select id="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type">
                @foreach ($types as $type => $label)
                    <option value="{{ $type }}"{{ $type == old('type') ? ' selected' : '' }}>{{ $label }}</option>
                @endforeach;
            </select>
            @if ($errors->has('type'))
                <span class="invalid-feedback"><strong>{{ $errors->first('type') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="variants" class="col-form-label">Variants</label>
            <textarea id="variants" type="text" class="form-control{{ $errors->has('sort') ? ' is-invalid' : '' }}" name="variants">{{ old('variants') }}</textarea>
            @if ($errors->has('variants'))
                <span class="invalid-feedback"><strong>{{ $errors->first('variants') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <input type="hidden" name="required" value="0">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="required" {{ old('required') ? 'checked' : '' }}> Rquired
                </label>
            </div>
            @if ($errors->has('required'))
                <span class="invalid-feedback"><strong>{{ $errors->first('required') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
