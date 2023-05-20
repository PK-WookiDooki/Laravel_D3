<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @vite('resources/css/app.css')
</head>

<body>

    <section class="w-[90%] mx-auto">
        <div class="w-full mb-6">
            @include('layouts.header')
        </div>
        <div class="flex flex-col md:flex-row justify-center items-stretch gap-6 mb-5 h-full">
            <div class="w-full lg:w-[30%] md:w-[50%] duration-200 sticky top-0 lg:top-1 h-full z-20">
                @include('layouts.sidebar')
            </div>
            <div class="w-full shadow p-3 hover:shadow-lg duration-200">
                @verifying
                    @include('layouts.email_verify_noti')
                @endverifying

                @yield('contents')
            </div>
        </div>
    </section>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
