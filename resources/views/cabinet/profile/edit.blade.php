@extends('layouts.appfront')

@section('content')
    @include('cabinet.profile._nav')

    <form method="POST" action="{{ route('cabinet.profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <img src="{{asset('storage/'.$user->image)}}" alt="">
            <label for="image" class="col-form-label">@lang($locale.'.avatar')</label>
            <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image', $user->image) }}" required>
            @if ($errors->has('image'))
                <span class="invalid-feedback"><strong>{{ $errors->first('image') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="first_name" class="col-form-label">@lang($locale.'.first_name')</label>
            <input id="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name', $user->first_name) }}" required>
            @if ($errors->has('first_name'))
                <span class="invalid-feedback"><strong>{{ $errors->first('first_name') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="last_name" class="col-form-label">@lang($locale.'.last_name')</label>
            <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name', $user->last_name) }}" required>
            @if ($errors->has('last_name'))
                <span class="invalid-feedback"><strong>{{ $errors->first('last_name') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="phone" class="col-form-label">@lang($locale.'.phone')</label>
            <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone', $user->phone) }}" required>
            @if ($errors->has('phone'))
                <span class="invalid-feedback"><strong>{{ $errors->first('phone') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="phone" class="col-form-label">@lang($locale.'.email')</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email', $user->email) }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="region" class="col-form-label">@lang($locale.'.region')</label>
            <select>
                @foreach($regions as $region)
                    <option value="{{$region['id']}}">{{$region['name_'.$locale]}}</option>
                @endforeach
            </select>
            @if ($errors->has('region'))
                <span class="invalid-feedback"><strong>{{ $errors->first('region') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">@lang($locale.'.save')</button>
        </div>
    </form>
@endsection
