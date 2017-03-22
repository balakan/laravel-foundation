<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <div class="off-canvas-wrapper">
            <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

                <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
                    <div class="title-bar-left">
                        {{ config('app.name', 'Laravel') }}
                    </div>
                    <div class="title-bar-right">
                        <button class="menu-icon" type="button" data-toggle="offCanvasLeft"></button>
                    </div>
                </div>

                <!-- off-canvas right menu -->
                <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas data-position="left">
                    <ul class="vertical dropdown menu" data-dropdown-menu>
                        <li><a href="right_item_1">Right item 1</a></li>
                        <li><a href="right_item_2">Right item 2</a></li>
                        <li><a href="right_item_3">Right item 3</a></li>
                    </ul>
                </div>

                <div class="off-canvas-content" data-off-canvas-content>

                    <div id="widemenu" class="top-bar-container hide-for-small-only" data-sticky-container>
                        <div class="sticky" data-options="marginTop:0;" data-sticky data-sticky-on="small" style="width:100%;">
                            <div class="top-bar">
                                <div class="">
                                    <a href="{{ url('/') }}">
                                        {{ config('app.name', 'Laravel') }}
                                    </a>
                                </div>

                                <div class="top-bar-right">
                                    <ul class="dropdown menu" data-dropdown-menu>

                                        @if (Auth::guest())
                                            <li><a href="{{ url('/login') }}">Login</a></li>
                                            <li><a href="{{ url('/register') }}">Register</a></li>
                                        @else
                                            <li class="has-submenu">
                                                <a href="#">
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <ul class="menu submenu vertical" data-submenu>
                                                    <li>
                                                        <a href="{{ url('/logout') }}"
                                                           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                                            Logout
                                                        </a>

                                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    @yield('content')

                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
