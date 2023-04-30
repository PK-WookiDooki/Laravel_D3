<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @vite('resources/css/app.css')
</head>
<body>

    <section class="w-[85%] mx-auto">
        <div class="w-full mb-5">
            @include('layouts.header')
        </div>
        <div class="flex flex-col md:flex-row justify-center gap-5">
            <div class="w-full lg:w-[30%] duration-200">
                @include('layouts.sidebar')
            </div>
            <div class="w-full shadow p-3">
                @yield('contents')
            </div>
        </div>
    </section>

</body>
</html>
