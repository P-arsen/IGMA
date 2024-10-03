@extends('layouts.app')

@section('content')
    @include('admin.users._nav')

    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf

        <div class="form-group">
            <label for="first_name" class="col-form-label">Անուն</label>
            <input id="name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required>
            @if ($errors->has('first_name'))
                <span class="invalid-feedback"><strong>{{ $errors->first('first_name') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="last_name" class="col-form-label">Ազգանուն</label>
            <input id="name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required>
            @if ($errors->has('last_name'))
                <span class="invalid-feedback"><strong>{{ $errors->first('last_name') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="email" class="col-form-label">Էլ-Հասցե</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Հաստատել</button>
        </div>
    </form>
@endsection
