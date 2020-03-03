<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- App css -->
    <link href="{{asset('assets_theme/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_theme/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_theme/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_theme/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_theme/css/custom.css')}}" rel="stylesheet" type="text/css" />
    @stack('extra_css')
</head>

<body>

    <body class="@yield('body_class')">

        @auth
        @include('layouts.header')

        <div class="page-wrapper pt-0">

            <!-- Page Content-->
            <div class="page-content">

                @endauth
                @yield('content')
                @auth

            </div>

            <!-- end page content -->
            <footer class="footer text-center text-sm-left">
                <div class="boxed-footer">
                    &copy; {{date('Y')}} <span class="text-muted d-none d-sm-inline-block float-right"> SC </span>
                </div>
            </footer>
            <!--end footer-->
        </div>

        @endauth
        <!-- end page-wrapper -->
    </body>

</html>