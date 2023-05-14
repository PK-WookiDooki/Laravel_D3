@extends('layouts.master')

@section('title')
    Create Category
@endsection

@section('contents')
<h2 class="text-xl font-bold mx-auto w-fit px-5 pb-1 border-b border-gray-400 ">Create Category</h2>
    <form action="{{route('category.store')}}" class="mt-5" method="POST">

        @csrf

        <div class="mb-3">
            <label for="title" class="font-medium">Category Title</label>
            <input type="text" id="title" class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none" required name="title">
        </div>

        <div class="mb-3">
            <label for="description" class="font-medium">Category Description</label>
            <textarea id="description" class="border border-gray-400 rounded w-full h-[150px] px-2 outline-none" required name="description"></textarea>
        </div>

        <button type="submit" class="px-5 py-[5px] bg-blue-700 text-white rounded hover:bg-blue-600 duration-200">Create</button>

    </form>
@endsection
