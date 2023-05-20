@extends('layouts.master')

@section('title')
    Register
@endsection

@section('contents')
    <h2 class="text-xl font-bold text-center mb-4">Student Register</h2>
    <form method="post" action="{{ route('auth.store') }}">

        @csrf

        <div class="w-full mb-3">
            <label for="name" class="font-medium">Name</label>
            <input value="{{ old('name') }}" type="text" id="name"
                class="border-[1px] border-gray-400 rounded w-full h-[35px] px-2 outline-none @error('name') border-red-600 @enderror"
                name="name">
            @error('name')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

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

        <div class="w-full mb-3">
            <label for="password_confirmation" class="font-medium">Confirm Password</label>
            <input type="password" id="password_confirmation"
                class="border-[1px] border-gray-400 rounded w-full h-[35px] px-2 outline-none @error('password_confirmation') border-red-600 @enderror"
                name="password_confirmation">
            @error('password_confirmation')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <div class="">
            <button class="btn btn-primary">Register</button>
        </div>
    </form>
@endsection
