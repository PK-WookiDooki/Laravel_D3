@extends('layouts.master')

@section('title')
    New Password
@endsection

@section('contents')
    <h2 class="text-xl font-bold mb-4 text-center">New Password</h2>
    <form method="post" action="{{ route('auth.resetPassword') }}">

        @csrf
        <input type="hidden" name="user_token" value="{{ $user_token }}">

        <div class="w-full mb-3">
            <label for="password" class="">New Password</label>
            <input type="password" id="password"
                class="border-[1px] border-gray-400 mt-1 rounded w-full h-[35px] px-2 outline-none @error('password') border-red-600 @enderror"
                name="password">
            @error('password')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <div class="w-full mb-3">
            <label for="password_confirmation" class="">Confirm Password</label>
            <input type="password" id="password_confirmation"
                class="border-[1px] border-gray-400 mt-1 rounded w-full h-[35px] px-2 outline-none @error('password_confirmation') border-red-600 @enderror"
                name="password_confirmation">
            @error('password_confirmation')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>
        <div class="">
            <button class="btn btn-primary">Reset Now</button>
        </div>
    </form>
@endsection
