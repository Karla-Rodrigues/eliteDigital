<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    eliteDigital
                </div>

                @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a class="links" href="{{ url('/import') }}">Import</a>
                        <a class="links" href="{{ url('/files') }}">Files</a>

                        <a class="links" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>

                    @else
                        <a class="links" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="links" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                @endif

            </div>
        </div>
    </body>
</html>
