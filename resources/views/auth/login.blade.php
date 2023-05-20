@extends('layouts.master')

@section('title')
    Login
@endsection

@section('contents')
    <h2 class="text-xl font-bold mb-4 text-center">Student Login</h2>

    @if (session('message'))
        <div class=" alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form method="post" action="{{ route('auth.check') }}">

        @csrf

        <div class="w-full mb-3">
            <label for="email" class="font-medium">Email</label>
            <input value="{{ old('email') }}" type="email" id="email"
                class="border-[1px] border-gray-400 rounded w-full h-[35px] px-2 outline-none @error('email') border-red-600 @enderror"
                name="email">
            @error('email')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <div class="w-full mb-3">
            <label for="password" class="font-medium">Password</label>
            <input type="password" id="password"
                class="border-[1px] border-gray-400 rounded w-full h-[35px] px-2 outline-none @error('password') border-red-600 @enderror"
                name="password">
            @error('password')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <div class=" flex justify-between items-center">
            <a class=" border-b text-blue-500 hover:text-blue-600 border-blue-500 hover:border-600 duration-150"
                href="{{ route('auth.forgotPassword') }}">
                Forgot Password ?
            </a>
            <button class="btn btn-primary">Login</button>
        </div>
    </form>
@endsection
