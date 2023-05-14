@extends('layouts.master')

@section('title')
    Edit Item
@endsection

@section('contents')
    <h2 class="text-xl font-bold mx-auto w-fit px-5 pb-1 border-b border-gray-400">Edit Item</h2>
    <form action="{{ route('inventory.update', $item->id) }}" class="mt-5" method="POST">

        @method('put')
        @csrf

        <div class="mb-3">
            <label for="name" class="font-medium">Item Name</label>
            <input value="{{ old('name', $item->name) }}" type="text" id="name"
                class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none mt-1 @error('name') border-red-500 @enderror"
                name="name" value="{{ $item->name }}">
            @error('name')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="font-medium">Item Price</label>
            <input value="{{ old('price', $item->price) }}" type="number" id="price"
                class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none  mt-1 @error('price') border-red-600 @enderror"
                name="price" value="{{ $item->price }}">
            @error('price')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="stock" class="font-medium">Stock</label>
            <input value="{{ old('stock', $item->stock) }}" type="number" id="stock"
                class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none  mt-1 @error('stock') border-red-600 @enderror"
                name="stock" value="{{ $item->stock }}">
            @error('stock')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <button type="submit"
            class="px-5 py-[5px] bg-blue-700 text-white rounded hover:bg-blue-600 duration-200">Update</button>

    </form>
@endsection
