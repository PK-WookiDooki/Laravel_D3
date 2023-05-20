@extends('layouts.master')

@section('title')
    Verify Code
@endsection

@section('contents')
    <h2 class="text-xl font-bold mb-4 text-center">Verify Code</h2>

    @if (session('message'))
        <div class=" alert alert-warning">
            {{ session('message') }}
        </div>
    @endif

    <form method="post" action="{{ route('auth.verifyingCode') }}">
        @csrf
        <div class="w-full mb-3">
            <label for="verify_code" class="">Enter Verification Code</label>
            <input type="text" id="verify_code"
                class="border-[1px] border-gray-400 rounded w-full h-[35px] px-2 outline-none mt-1 @error('verify_code') border-red-600 @enderror"
                name="verify_code">
            @error('verify_code')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>
        <div class="">
            <button class="btn btn-primary">Verify</button>
        </div>
    </form>
@endsection
