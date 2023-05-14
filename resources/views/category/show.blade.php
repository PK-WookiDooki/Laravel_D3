@extends('layouts.master')

@section('title')
    Category Detail
@endsection

@section('contents')

    <div class="">
        <h2 class="text-xl font-bold text-yellow-700">Category Detail</h2>

        <table class="w-full">
            <tr class="h-[40px]">
                <th class="border border-gray-500 px-2 text-left">Title</th>
                <td class="border border-gray-500 px-2"> {{$category->title}} </td>
            </tr>
            <tr class="min-h-[40px]">
                <th class="border border-gray-500 px-2 text-left">Description</th>
                <td class="border border-gray-500 px-2"> {{$category->description}} </td>
            </tr>
            <tr class="h-[40px]">
                <th class="border border-gray-500 px-2 text-left">Created At</th>
                <td class="border border-gray-500 px-2"> {{$category->created_at}} </td>
            </tr><tr class="h-[40px]">
                <th class="border border-gray-500 px-2 text-left">Updated At</th>
                <td class="border border-gray-500 px-2"> {{$category->updated_at}} </td>
            </tr>
            <tr class="">
                <th class="border border-gray-500 px-2 text-left">Controls</th>
                <td class="border border-gray-500 px-2">
                    <div class="py-2">
                        <a href="{{route("category.edit", $category->id)}}" class="border border-gray-800 px-5 py-[6px] rounded text-gray-800 hover:bg-gray-800 hover:text-white duration-200">Edit</a>
                    </div>
                </td>
            </tr>
        </table>

    </div>
@endsection
