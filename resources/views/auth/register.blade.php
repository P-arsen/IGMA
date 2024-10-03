@extends('layouts.appfront')

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')  }}">Home</a></li>
        <li class="breadcrumb-item active">Register</li>
    </ul>
@endsection

@section('content')
    <main class="w-full flex flex-col gap-4 justify-center items-center mt-16">

        <section>
            <div class="container_width h-full flex flex-col justify-center items-center">
                <div class="w-full max-w-96 flex flex-col justify-center items-center gap-2 border rounded-sm p-4">
                    <h2 class="title_h2 mb-2">@lang($locale.'.register')</h2>


            <form method="POST" action="{{ route('register') }}">
                        @csrf
                                <input id="first_name" type="text"
                                       class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }} w-full p-2 rounded-md border"
                                       name="first_name" value="{{ old('first_name') }}" placeholder="@lang("{$locale}.first_name")" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif

                        <input id="last_name" type="text"
                               class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }} w-full p-2 rounded-md border"
                               name="last_name" value="{{ old('last_name') }}" placeholder="@lang("{$locale}.last_name")" required autofocus>

                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                        @endif

                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} w-full p-2 rounded-md border"
                                       name="email" value="{{ old('email') }}" placeholder="@lang("{$locale}.email")" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} w-full p-2 rounded-md border"
                                       placeholder="@lang("{$locale}.password")"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <input id="password-confirm" type="password"
                                       placeholder="@lang("{$locale}.confirm_password")"
                                       class="form-control w-full p-2 rounded-md border" name="password_confirmation" required>
                                <button type="submit" class="w-full bg-blue-500 border-none text-xl text-white py-1 rounded-md font-medium">
                                    @lang("{$locale}.register")
                                </button>
                    </form>
                </div>
            </div>
        </section>
@endsection
