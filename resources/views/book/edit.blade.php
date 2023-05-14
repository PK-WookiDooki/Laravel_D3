@extends('layouts.master')

@section('title')
    Edit Book
@endsection

@section('contents')
    <h2 class="text-xl font-bold mx-auto w-fit px-5 pb-1 border-b border-gray-400 ">Edit Book</h2>
    <form action="{{ route('book.update', $book->id) }}" class="mt-6" method="POST">

        @method('put')
        @csrf
        {{-- @csrf -> generate token for the form --}}

        <div class="mb-3">
            <label for="title" class="font-medium">Book Title</label>
            <input value="{{ old('title', $book->title) }}" type="text" id="title"
                class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none text-gray-400 focus:text-black duration-100"
                name="title">
            @error('title')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="author" class="font-medium">Book Author</label>
            <input value="{{ old('author', $book->author) }}" type="text" id="author"
                class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none text-gray-400 focus:text-black duration-100"
                name="author">
            @error('author')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="font-medium">Book Price</label>
            <input value="{{ old('price', $book->price) }}" type="number" id="price"
                class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none text-gray-400 focus:text-black duration-100"
                name="price">
            @error('price')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="stock" class="font-medium">Book Stock</label>
            <input value="{{ old('stock', $book->stock) }}" type="number" id="stock"
                class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none text-gray-400 focus:text-black duration-100"
                name="stock">
            @error('stock')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="summery" class="font-medium">Book Summery</label>
            <textarea id="summery"
                class="border border-gray-400 rounded w-full h-[150px] px-2 outline-none text-gray-400 focus:text-black"
                name="summery"> {{ old('summery', $book->summery) }} </textarea>
            @error('summery')
                <small class="text-red-600 mt-1 text-[14px]"> {{ $message }} </small>
            @enderror
        </div>

        <button type="submit"
            class="px-6 py-[5px] bg-blue-700 text-white rounded hover:bg-blue-600 duration-200">Update</button>

    </form>
@endsection
