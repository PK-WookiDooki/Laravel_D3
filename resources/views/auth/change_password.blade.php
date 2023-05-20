@extends('layouts.master')

@section('title')
    Change Password
@endsection

@section('contents')
    <h2 class="text-xl font-bold mb-4 text-center">Change Password</h2>
    <form method="post" action="{{ route('auth.changingPassword') }}">

        @csrf
        <div class="w-full mb-3">
            <label for="current_password" class="font-medium">Current Password</label>
            <input type="password" id="current_password"
                class="border-[1px] border-gray-400 rounded w-full h-[35px] px-2 outline-none @error('current_password') border-red-600 @enderror"
                name="current_password">
            @error('current_password')
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
            <button class="btn btn-primary">Change Now</button>
        </div>
    </form>
@endsection
