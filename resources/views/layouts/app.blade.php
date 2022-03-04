<!DOCTYPE html>
    <html lang="en" dir="rtl">
    <head>
        @include('layouts.includes.header')
    </head>

    <body>

        <!-- loader strat -->
        <div class="loader">
            <span></span>
            <span></span>
        </div>
        <!-- loader end -->

        @include('layouts.includes.navbar')
        @yield('content')
        @include('layouts.includes.navbar-bottom')
        @include('layouts.includes.js')
    </body>
</html>
