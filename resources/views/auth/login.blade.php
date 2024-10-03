@extends('layouts.appfront')

@section('content')
{{--    <div class="w-full h-16">--}}
<main class="w-full flex flex-col gap-4 justify-center items-center mt-16">

    <main class="w-full flex flex-col gap-4 justify-center items-center mt-16">

        <div class="w-full">
            <div id="mobile_menu" class="w-full h-screen bg-black/50 absolute -translate-x-full z-40 transition-all duration-300">
                <div class='w-full max-w-96 h-full overflow-y-auto pb-6 bg-white'>
                    <div class="w-full flex justify-end px-4">
                        <button id="closeMenu" class="mt-2 translate-x-1">
                            <svg class="w-8 rotate-45" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="448,224 288,224 288,64 224,64 224,224 64,224 64,288 224,288 224,448 288,448 288,288 448,288 "/></svg>
                        </button>
                    </div>
                    <div class="w-full px-4">
                        @foreach($categoriesArray as $categorysingle)
                            <div class="border-b border-gray-200">
                                <button class="accordion-header flex justify-between items-center w-full py-3 text-left font-medium text-gray-700 focus:outline-none">
                                    <div class="w-fit flex items-center gap-1">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-5 h-5 object-cover">
                                        <span>
                                            {{$categorysingle['name_'.$locale]}}
                                        </span>
                                    </div>
                                    <svg class="accordion-icon w-5 h-5 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="accordion-content hidden px-4">

                                    @foreach($categorysingle['children'] as $sub_category)
                                        <div class="w-full flex flex-col gap-1">
                                            <h4 class="title_h4">{{$sub_category['name_'.$locale]}}</h4>
                                            <div class="ml-1 w-full flex flex-col">
                                                @foreach($sub_category['attributes'] as $children)
                                                    <a href="#" class="text-blue-600 text-14">{{$children['name_'.$locale]}}</a>
                                                @endforeach
                                            </div>
                                        </div>@endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="container_width flex justify-between gap-2 pt-4">
                <button id="openMenu" class="pasiv_button w-full max-w-40 text-center lg:hidden block">@lang($locale.'.categories')</button>
                <a href="#" class="active_button sm:w-fit w-full sm:max-w-none max-w-40 flex-shrink-0 items-center justify-center gap-1 !px-2  lg:hidden flex">
                    <svg class="w-6" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:4px;}</style></defs><title/><g id="plus"><line class="cls-1" x1="16" x2="16" y1="7" y2="25"/><line class="cls-1" x1="7" x2="25" y1="16" y2="16"/></g></svg>
                    @lang($locale.'.add')
                    <span class="sm:block hidden"> @lang($locale.'.post')</span>
                </a>

            </div>
        </div>

    <section>
        <div class="container_width h-full flex flex-col justify-center items-center">
            <div class="w-full max-w-96 flex flex-col justify-center items-center gap-2 border rounded-md p-5">
                <img src="{{asset('storage/images/logo.svg')}}" alt="">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                                <input type="email" id="email"
                                       class="w-full p-2 rounded-md border form-control{{ $errors->has('email') ? ' is-invalid' : '' }} pr-20"
                                            name="email" placeholder="@lang("{$locale}.email")"
                                                value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <div class="w-full relative">
                            <input type="password" id="password" name="password"
                                   class="w-full p-2 rounded-md border form-control{{ $errors->has('password') ? ' is-invalid' : '' }} pr-20" placeholder="@lang("{$locale}.password")">
                            <a href="{{ route('password.request') }}" class="absolute right-1 top-1/2 -translate-y-1/2 hover_links text-14">@lang("{$locale}.forgot_password")</a>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

{{--                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                <button type="submit" id="loginButton"
                                        class="w-full bg-blue-500 border-none text-xl text-white py-1 rounded-md font-medium">@lang("{$locale}.sign_in")
                                </button>
                    </form>
                <p class="text-blue-500 mt-4 font-medium">@lang("{$locale}.not_registered")</p>
                <a href="{{route('register')}}" class="w-full text-center px-4 mx-auto border py-1 rounded-md border-blue-500 bg-white text-blue-500 text-16">@lang("{$locale}.register")</a>
{{--                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                        Forgot Your Password?--}}
{{--                    </a>--}}
                </div>
            </div>
    </section>
</main>
@endsection
