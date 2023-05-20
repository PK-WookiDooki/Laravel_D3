@extends('layouts.master')

@section('title')
    Forgot Password
@endsection

@section('contents')
    <h2 class="text-xl font-bold mb-4 text-center">Forgot Password</h2>
    <form method="post" action="{{ route('auth.checkEmail') }}">

        @csrf
        <div class="w-full mb-3">
            <label for="email" class="">Enter Your Email</label>
            <input type="email" id="email"
                class="border-[1px] border-gray-400 rounded w-full h-[35px] px-2 outline-none mt-1 @error('email') border-red-600 @enderror"
                name="email">
            @error('email')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>
        <div class="">
            <button class="btn btn-primary">Reset</button>
        </div>
    </form>
@endsection
