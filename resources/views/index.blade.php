@extends('layouts.master')

@section('title')
    Home
@endsection

@section('contents')
    {{-- route helper --}}
    <div class=" alert alert-info">{{ route('inventory.show', [12, 'aaa' => 'triple a']) }}</div>
    <div class="group tracking-wide">
        <h1 class="text-xl font-bold text-red-700 mb-[15px]">Meet Laravel</h1>
        <div class="text-gray-500 group-hover:text-black duration-100 ">
            <p class="mb-[10px]">
                Laravel is a web application framework with
                expressive,
                elegant syntax. A web framework
                provides a structure and
                starting point for creating your application, allowing you to focus on creating something amazing while we
                sweat
                the
                details.
            </p>

            <p class="mb-[10px]">
                Laravel strives to provide an amazing developer experience while providing powerful features such as
                thorough
                dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and
                integration
                testing, and more.
            </p>

            <p class="mb-[10px]">
                Whether you are new to PHP web frameworks or have years of experience, Laravel is a framework that can grow
                with
                you. We'll help you take your first steps as a web developer or give you a boost as you take your expertise
                to
                the
                next level. We can't wait to see what you build.
            </p>
        </div>
    </div>
    <div class="group mt-5">
        <div class="text-gray-500 group-hover:text-black duration-100 tracking-wide mb-[20px]">
            <h1 class="text-xl font-bold text-red-700 mb-[15px]">Why Laravel</h1>
            <p class="mb-[10px]">There are a variety of tools and frameworks available to you when building a web
                application. However, we
                believe Laravel is the best choice for building modern, full-stack web applications.</p>
        </div>
        <div class="text-gray-500 group-hover:text-black duration-100 tracking-wide">
            <div class="mb-[20px]">
                <h2 class="font-medium text-black mb-[10px]">
                    A Progressive Framework
                </h2>
                <p class="mb-[10px]">
                    We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If
                    you're just
                    taking your first steps into web development, Laravel's vast library of documentation, guides, and video
                    tutorials will help you learn the ropes without becoming overwhelmed.
                </p>
                <p class="mb-[10px]">
                    If you're a senior developer, Laravel gives you robust tools for dependency injection, unit testing,
                    queues,
                    real-time events, and more. Laravel is fine-tuned for building professional web applications and ready
                    to handle
                    enterprise work loads.
                </p>

            </div>




            <div class="mb-[20px]">
                <h2 class="font-medium text-black mb-[10px]">
                    A Scalable Framework
                </h2>
                <p class="mb-[10px]">
                    Laravel is incredibly scalable. Thanks to the scaling-friendly nature of PHP and Laravel's built-in
                    support for
                    fast, distributed cache systems like Redis, horizontal scaling with Laravel is a breeze. In fact,
                    Laravel
                    applications have been easily scaled to handle hundreds of millions of requests per month.
                </p>
                <p class="mb-[10px]">
                    Need extreme scaling? Platforms like Laravel Vapor allow you to run your Laravel application at nearly
                    limitless
                    scale on AWS's latest serverless technology.
                </p>
            </div>


            <div class="mb-[20px]">
                <h2 class="font-medium text-black mb-[10px]">
                    A Community Framework
                </h2>

                <p class="mb-[10px]">
                    Laravel combines the best packages in the PHP ecosystem to offer the most robust and developer friendly
                    framework available. In addition, thousands of talented developers from around the world have
                    contributed to the
                    framework. Who knows, maybe you'll even become a Laravel contributor.
                </p>
            </div>



        </div>
    </div>
@endsection
