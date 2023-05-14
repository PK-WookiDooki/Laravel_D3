@extends('layouts.master')

@section('title')
    Create Item
@endsection

@section('contents')
<h2 class="text-xl font-bold mx-auto w-fit px-6 pb-1 border-b border-gray-400">Create Item</h2>

    {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
        </ul>
    @endif --}}

    <form action="{{route('inventory.store')}}" class="mt-6" method="POST">

        @csrf

        <div class="mb-4">
            <label for="name" class="font-medium">Item Name</label>
            <input value="{{old('name')}}" type="text" id="name" class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none mt-1 @error('name') @enderror" name="name">
            @error('name')
                <small class="text-red-600 mt-1 text-[14px]"> {{$message}} </small>
            @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="font-medium">Item Price</label>
            <input value="{{old('price')}}" type="number" id="price" class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none mt-1 @error('price') border-red-600 @enderror" name="price">
            @error('price')
                <small class="text-red-600 mt-1 text-[14px]"> {{$message}} </small>
            @enderror
        </div>

        <div class="mb-4">
            <label for="stock" class="font-medium">Stock</label>
            <input value="{{old('stock')}}" type="number" id="stock" class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none mt-1 @error('stock') border-red-600 @enderror" name="stock">
            @error('stock')
                <small class="text-red-600 mt-1 text-[14px]"> {{$message}} </small>
            @enderror
        </div>

        <button type="submit" class="px-5 py-[5px] bg-blue-700 text-white rounded hover:bg-blue-600 duration-200">Create</button>

    </form>
@endsection
