<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 10 task list app</title>
        @yield('styles')
    </head>
    <body>
        <h1>@yield('title')</h1>
        <div>
            @if (session()->has('success'))
                <p style="color: green">{{session('success')}}</p>
            @endif
            @yield('content')
        </div>
    </body>
</html>