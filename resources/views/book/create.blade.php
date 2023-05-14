@extends('layouts.master')

@section('title')
    Add Book
@endsection

@section('contents')
    <h2 class="text-xl font-bold mx-auto w-fit px-6 pb-1 border-b border-gray-400 ">Add Book</h2>
    <form action="{{ route('book.store') }}" class="mt-6" method="POST">

        @csrf
        {{-- @csrf -> generate token for the form --}}

        <div class="flex lg:flex-row flex-col justify-between items-center lg:gap-[30px] gap-[12px] mb-3">
            <div class="w-full">
                <label for="title" class="font-medium">Book Title</label>
                <input value="{{ old('title') }}" type="text" id="title"
                    class="border-[1px] border-gray-400 rounded w-full h-[35px] px-2 outline-none @error('title') border-red-600 @enderror"
                    name="title">
                @error('title')
                    <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
                @enderror
            </div>

            <div class="w-full">
                <label for="author" class="font-medium">Book Author</label>
                <input value="{{ old('author') }}" type="text" id="author"
                    class="border-[1px] border-gray-400 rounded w-full h-[35px] px-2 outline-none @error('author') border-red-600 @enderror"
                    name="author">
                @error('author')
                    <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
                @enderror
            </div>
        </div>

        <div class="flex lg:flex-row flex-col justify-between items-center lg:gap-[30px] gap-[12px] mb-3">
            <div class="w-full">
                <label for="price" class="font-medium">Book Price</label>
                <input value="{{ old('price') }}" type="number" id="price"
                    class="border-[1px] border-gray-400 rounded w-full h-[35px] px-2 outline-none @error('price') border-red-600 @enderror"
                    name="price">
                @error('price')
                    <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
                @enderror
            </div>

            <div class="w-full">
                <label for="stock" class="font-medium">Book Stock</label>
                <input value="{{ old('stock') }}" type="number" id="stock"
                    class="border-[1px] border-gray-400 rounded w-full h-[35px] px-2 outline-none @error('stock') border-red-600 @enderror"
                    name="stock">
                @error('stock')
                    <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="summery" class="font-medium">Book Summery</label>
            <textarea id="summery"
                class="border-[1px] border-gray-400 rounded w-full h-[150px] px-2 outline-none @error('summery') border-red-600 @enderror"
                name="summery"> {{ old('summery') }} </textarea>
            @error('summery')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <button type="submit" class="px-6 py-[5px] bg-blue-700 text-white rounded hover:bg-blue-600 duration-200">Add
            Now</button>

    </form>
@endsection
