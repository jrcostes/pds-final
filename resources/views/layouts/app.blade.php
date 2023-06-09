<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta charset="utf-8"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Personal Datasheet') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-laravel" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}" id="navbartext">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    Personal Datasheet
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" id="navbartext" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" id="navbartext" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
       </head>
    <body>
            <!-- Styles -->
        <style>
            html, body {
                background-color: #F5F7F8;
                color: #636b6f;
                font-family: 'Nunito', 'Segoe UI';
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding-top: 35px;
            }
            h5 {
                font-style: italic;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: justify;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* Index CSS */

            .org{
                padding: 5px;
                margin: 5px;
            }



            h2 {
                text-align: justify;
                font-size: 30px;
            }
            .table {
                width: 100%;
            }
            input {
                width: 100%;
                border: none;
                font-size: 13px;
                color: #636b6f;
            }
            #row1, #row3 {
                padding: 35px 10px 10px 10px;
                text-align: center;
                font-size: 15px;
            }

            #row3-1{
                padding: 37px 10px 10px 10px;
                text-align: center;
                font-size: 15px;
            }
            #row-dates{
                padding: 10px 10px 10px 10px;
                text-align: center;
            }
            #rowid{
                padding: 20px 10px 10px 10px;
                text-align: center;
                font-size: 15px;
            }
            #row2, #row4 {
                padding: 10px 10px 10px 10px;
                text-align: center;
            }
            #row5 {
                padding: 20px 10px 10px 10px;
                text-align: center;
                font-size: 15px;
            }



            .center {
                margin:  5px 5px 5px 5px;
                text-align: center;

            }
            /* #row1 {
                padding-left: 20px;
                text-align: center;
                font-size: 30px;
            } */

            #navbar {
                background-color: #0D4E86;
                font-family: 'Nunito', 'Segoe UI';
            }

            #navbartext {
                color: #E8BA00;

            }

        </style>

    </body>

</html>
