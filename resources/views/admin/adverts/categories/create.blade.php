@extends('layouts.app')

@section('content')
    @include('admin.adverts.categories._nav')

    <form method="POST" action="{{ route('admin.adverts.categories.store') }}" enctype="multipart/form-data" >
        @csrf

        <div class="form-group">
            <label for="icon" class="col-form-label">Icon</label>
            <input id="icon" type="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="icon" value="{{ old('icon') }}" required>
            @if ($errors->has('icon'))
                <span class="invalid-feedback"><strong>{{ $errors->first('icon') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="name_am" class="col-form-label">Name ARM</label>
            <input id="name_am"
                   class="form-control{{ $errors->has('name_am') ? ' is-invalid' : '' }}" name="name_am" value="{{ old('name_am') }}" required>
            <label for="name_ru" class="col-form-label">Name RUS</label>
            <input id="name_ru"
                   class="form-control{{ $errors->has('name_ru') ? ' is-invalid' : '' }}" name="name_ru" value="{{ old('name_ru') }}" required>
            <label for="name_en" class="col-form-label">Name ENG</label>
            <input id="name_en"
                   class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}" name="name_en" value="{{ old('name_en') }}" required>
            @if ($errors->has('name'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name_am') }}</strong></span>
                <span class="invalid-feedback"><strong>{{ $errors->first('name_ru') }}</strong></span>
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
            <label for="parent" class="col-form-label">Parent</label>
            <select id="parent" class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" name="parent">
                <option value="" selected>
            @foreach ($parents as $parent)
                    <option value="{{ $parent->id }}"{{ $parent->id == old('parent') ? ' selected' : '' }}>
{{--                        @for ($i = 0; $i < $parent->depth; $i++)  @endfor--}}
                        {{ $parent->name_am }}
                    </option>
                @endforeach;
            </select>
            @if ($errors->has('parent'))
                <span class="invalid-feedback"><strong>{{ $errors->first('parent') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
