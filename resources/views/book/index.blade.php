@extends('layouts.master')

@section('title')
    Books List
@endsection

@section('contents')
    <div class="">
        <h2 class="text-xl font-bold mb-3">Books List</h2>

        @if (session('status'))
            <div class="py-[18px] pl-5 w-full rounded bg-[#50a54a] tracking-wide my-3 text-green-900 bg-opacity-40">
                {{ session('status') }}
            </div>
        @endif

        <table class="w-full bg-gray-50 rounded">
            <thead>
                <tr class="h-[40px] text-lg text-center">
                    <th class="border border-gray-500 px-3">#</th>
                    <th class="border border-gray-500 px-3">Title</th>
                    <th class="border border-gray-500 px-3">Author</th>
                    <th class="border border-gray-500 px-3">Price</th>
                    <th class="border border-gray-500 px-3">Stock</th>
                    <th class="border border-gray-500 px-3">Controls</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr class="h-[40px]">
                        <td class="border border-gray-500 px-3 text-right"> {{ $book->id }} </td>
                        <td class="border border-gray-500 px-3"> {{ $book->title }} </td>
                        <td class="border border-gray-500 px-3"> {{ $book->author }} </td>
                        <td class="border border-gray-500 px-3 text-right"> {{ $book->price }} MMK </td>
                        <td class="border border-gray-500 px-3 text-right"> {{ $book->stock }} </td>
                        <td class="border border-gray-500 px-3 text-right">

                            <div class="flex flex-col md:flex-row items-center justify-center gap-2 py-2 ">
                                <a href="{{ route('book.show', $book->id) }}"
                                    class="border border-blue-700 px-[20px] py-[5px] rounded text-blue-700 hover:bg-blue-700 hover:text-white duration-200">Detail</a>

                                <a href="{{ route('book.edit', $book->id) }}"
                                    class="border border-gray-800 px-[20px] py-[5px] rounded text-gray-800 hover:bg-gray-800 hover:text-white duration-200">Edit</a>

                                <form action="{{ route('book.destroy', $book->id) }}" method="POST" class="">
                                    @method('delete')
                                    @csrf
                                    <button
                                        class="border border-red-700 px-[20px] py-[5px] rounded text-red-700 hover:bg-red-700 hover:text-white duration-200">Delete</button>

                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center border border-gray-500 py-3">
                            <div class="flex flex-col items-center gap-2 ">
                                <h2 class="text-lg font-medium">There is no record now!</h2>
                                <a href="{{ route('book.create') }}"
                                    class="px-5 py-[6px] rounded bg-blue-700 text-white hover:bg-blue-600 duration-200">Add
                                    One</a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3">
            {{ $books->onEachSide(1)->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
