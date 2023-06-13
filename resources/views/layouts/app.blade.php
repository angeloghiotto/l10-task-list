<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 10 task list app</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @yield('styles')
    </head>
    <body class="container mx-auto mt-10 mb-10 max-w-lg">
        <h1 class="text-2xl mb-4">@yield('title')</h1>
        <div>
            @if (session()->has('success'))
                <p style="color: green">{{session('success')}}</p>
            @endif
            @yield('content')
        </div>
    </body>
</html>