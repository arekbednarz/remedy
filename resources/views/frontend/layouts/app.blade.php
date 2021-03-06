<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Remedy portal">
        <meta name="author" content="ABednarz">
        @yield('meta')

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/frontend/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/frontend/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/frontend/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/frontend/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/frontend/apple-touch-icon-144x144-precomposed.png">

        <!-- GOOGLE WEB FONT -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

        <!-- BASE CSS -->
        <link href="css/frontend/bootstrap.min.css" rel="stylesheet">
        <link href="css/frontend/style.css" rel="stylesheet">
        <link href="css/frontend/menu.css" rel="stylesheet">
        <link href="css/frontend/vendors.css" rel="stylesheet">
        <link href="css/frontend/icon_fonts/css/all_icons_min.css" rel="stylesheet">

        <!-- YOUR CUSTOM CSS -->
        <link href="css/frontend/custom.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">

            <div class="layer"></div>
            <!-- Mobile menu overlay mask -->

            <div id="preloader">
                <div data-loader="circle-side"></div>
            </div>
            <!-- End Preload -->

            @include('frontend.includes.header')

            @include('includes.partials.messages')
            <main>
                @yield('content')
            </main>

            @include('frontend.includes.footer')

            <div id="toTop"></div>
            <!-- Back to top button -->

            <!-- COMMON SCRIPTS -->
            <script src="js/frontend/jquery-2.2.4.min.js"></script>
            <script src="js/frontend/common_scripts.min.js"></script>
            <script src="js/frontend/functions.js"></script>

        </div>
    </body>
</html>
