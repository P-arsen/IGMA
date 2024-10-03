<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IGMA.AM ADMIN PANEL  </title>
    <link rel="shortcut icon" href="{{asset('storage/images/logo.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="{{asset('build/assets/app-Csh5-uoX.css')}}" rel="stylesheet">
</head>
<body id="app">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #2aaacf">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    <img src="{{asset('storage/images/logo.svg')}}" alt="" height="30px">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->first_name .' ' . Auth::user()->last_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.home') }}">Admin</a>
                                    <a class="dropdown-item" href="{{ route('cabinet.home') }}">Cabinet</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @section('search')
            @include('layouts.partials.search', ['category' => null, 'route' => route('adverts.index')])
        @show
    </header>

    <main class="app-content py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-2">



{{--            @section('breadcrumbs', Breadcrumbs::render())--}}
            @yield('breadcrumbs')
            @include('layouts.partials.flash')
            @yield('content')
            </div>
            </div>
    </main>

    <footer>
        <div class="container">
            <div class="border-top pt-3">
                <p>&copy; {{ date('Y') }} - ArmCoding</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('build/assets/app-CO4HCsYM.js') }}"></script>
    @yield('scripts')
</body>
</html>
