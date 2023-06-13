<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 10 task list app</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        {{-- blade-formatter-disable --}}
        <style type="text/tailwindcss">
            .btn {
                @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 text-slate-700
            }
            .link{
                @apply font-medium text-gray-700 underline decoration-pink-500
            }

            label {
                @apply block uppercase text-slate-700 mb-2
            }

            input, textarea{
                @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
            }

            .error{
                @apply text-red-500 text-sm italic
            }
        </style>
        {{-- blade-formatter-enable --}}
        @yield('styles')
    </head>
    <body class="container mx-auto mt-10 mb-10 max-w-lg">
        <h1 class="text-2xl mb-4">@yield('title')</h1>
        <div x-data="{flash: true}">
            @if (session()->has('success'))
                <div x-show="flash" class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700"
                role="alert">
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" @click="flash = false">
                            <title>Close</title>
                            <path
                            d="M14.348 5.652a1 1 0 010 1.414L9.414 10l4.934 4.934a1 1 0
                            01-1.414 1.414L8 11.414l-4.934 4.934a1 1 0
                            01-1.414-1.414L6.586 10 .652 5.652a1 1 0
                            011.414-1.414L8 8.586l4.934-4.934a1 1 0 011.414
                            0z" />
                        </svg>
                    </span>
                    <strong class="font-bold">Success!</strong> <div>{{session('success')}}</div>
                </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>