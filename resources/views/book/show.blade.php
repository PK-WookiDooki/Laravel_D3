@extends('layouts.master')

@section('title')
    Book Detail
@endsection

@section('contents')
    <div class="">
        <h2 class="text-xl font-bold text-yellow-700 mb-3">Book Detail</h2>

        <table class="w-full">
            <tr class="h-[40px]">
                <th class="border border-gray-500 px-2 text-left">Title</th>
                <td class="border border-gray-500 px-2"> {{ $book->title }} </td>
            </tr>
            <tr class="h-[40px]">
                <th class="border border-gray-500 px-2 text-left">Author</th>
                <td class="border border-gray-500 px-2"> {{ $book->author }} </td>
            </tr>
            <tr class="h-[40px]">
                <th class="border border-gray-500 px-2 text-left">Price</th>
                <td class="border border-gray-500 px-2"> {{ $book->price }} MMK </td>
            </tr>
            <tr class="h-[40px]">
                <th class="border border-gray-500 px-2 text-left">Stock</th>
                <td class="border border-gray-500 px-2"> {{ $book->stock }} Items Left</td>
            </tr>
            <tr class="h-[40px]">
                <th class="border border-gray-500 px-2 text-left">Summery</th>
                <td class="border border-gray-500 px-2"> {{ $book->summery }}</td>
            </tr>
            <tr class="h-[40px]">
                <th class="border border-gray-500 px-2 text-left">Created At</th>
                <td class="border border-gray-500 px-2"> {{ $book->created_at }} </td>
            </tr>
            <tr class="h-[40px]">
                <th class="border border-gray-500 px-2 text-left w-[150px]">Updated At</th>
                <td class="border border-gray-500 px-2"> {{ $book->updated_at }} </td>
            </tr>
            <tr class="">
                <th class="border border-gray-500 px-2 text-left">Controls</th>
                <td class="border border-gray-500 px-2">
                    <div class="py-2">
                        <a href="{{ route('book.edit', $book->id) }}"
                            class="border border-gray-800 px-5 py-[6px] rounded text-gray-800 hover:bg-gray-800 hover:text-white duration-200">Edit</a>
                    </div>
                </td>
            </tr>
        </table>

    </div>
@endsection
