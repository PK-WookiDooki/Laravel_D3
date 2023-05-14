@extends('layouts.master')

@section('title')
    Edit Category
@endsection

@section('contents')
<h2 class="text-xl font-bold mx-auto w-fit px-5 pb-1 border-b border-gray-400 ">Edit Category</h2>
    <form action="{{route('category.update', $category->id)}}" class="mt-5" method="POST">

        @method("put")
        @csrf

        <div class="mb-3">
            <label for="title" class="font-medium">Category Title</label>
            <input type="text" id="title" class="border border-gray-400 rounded w-full h-[35px] px-2 outline-none" required name="title" value="{{$category->title}}">
        </div>

        <div class="mb-3">
            <label for="description" class="font-medium">Category Description</label>
            <textarea id="description" class="border border-gray-400 rounded w-full h-[150px] px-2 outline-none" required name="description"> {{$category->description}} </textarea>
        </div>

        <button type="submit" class="px-5 py-[5px] bg-blue-700 text-white rounded hover:bg-blue-600 duration-200">Update</button>

    </form>
@endsection
