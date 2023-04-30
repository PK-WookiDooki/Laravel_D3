@extends('layouts.master')

@section('title')
    Create Item
@endsection

@section('contents')
<h2 class="text-xl font-bold mx-auto w-fit px-5 pb-1 border-b border-gray-400">Create Item</h2>
    <form action="{{route('inventory.store')}}" class="mt-5" method="POST">

        @csrf

        <div class="mb-3">
            <label for="name" class="font-medium">Item Name</label>
            <input type="text" id="name" class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none" required name="name">
        </div>

        <div class="mb-3">
            <label for="price" class="font-medium">Item Price</label>
            <input type="number" id="price" class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none" required name="price">
        </div>

        <div class="mb-3">
            <label for="stock" class="font-medium">Stock</label>
            <input type="number" id="stock" class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none" required name="stock">
        </div>

        <button type="submit" class="px-5 py-[5px] bg-blue-700 text-white rounded hover:bg-blue-600 duration-200">Create</button>

    </form>
@endsection
