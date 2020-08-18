<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Styles -->

    </head>
    <body>

    <nav class="navbar fixed-top navbar-expand-md  navbar-dark bg-dark ">

            <div class="titre">
                <a class="navbar-brand" href="{{ url('/') }}">
                    HILBERT
                </a>
            </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="">Telephone </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link " href="{{route('pageEmploye')}}">Employés</a>
                </li>


            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} Deconnexion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item active">
                        @include('info_user')
                    </li>
                @endguest
            </ul>


        </div>
            </nav>
    @yield('content')


    <!-- Footer -->

    <footer class="page-footer">
        <div class="container-fluid text-center text-md-left">

            <div class="text-center">
                <h5>HIBERT</h5>
            </div>

                <hr color="reed">


        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            © 2020 Copyright:
            <a href="https://hilbert-is.com/" target="_blank"> Hilbert.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Footer -->

    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    </body>
</html>
