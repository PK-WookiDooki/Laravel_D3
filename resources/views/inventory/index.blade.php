@extends('layouts.master')

@section('title')
    Items List
@endsection

@section('contents')
    <div class="">
        <div class=" flex flex-col lg:flex-row justify-between lg:items-center relative mb-3 gap-3 lg:gap-0 z-10">
            <div class="flex gap-1 items-center">
                <h2 class="text-xl font-bold">List Items</h2>
                @if (request()->has('q'))
                    <p> [Search Result by '{{ request()->q }}']</p>
                @endif
            </div>
            <form action="{{ route('inventory.index') }}" method="GET">
                <div class=" input-group w-full lg:w-96 rounded-sm relative">
                    <input type="text" class=" form-control w-10"
                        @if (request()->has('q')) value="{{ request()->q }}" @endif name="q">
                    @if (request()->has('q'))
                        <a href="{{ route('inventory.index') }}" class="btn btn-danger">Clear</a>
                    @endif
                    <button class=" input-group-text btn btn-primary ">Search</button>
                </div>
            </form>
        </div>

        @if (session('status'))
            <div class="py-[18px] pl-5 w-full rounded bg-[#50a54a] tracking-wide my-3 text-green-900 bg-opacity-40">
                {{ session('status') }}
            </div>
        @endif

        <table class="w-full bg-gray-50 rounded">
            <thead>
                <tr class="h-[40px] text-lg text-center">
                    <th class="border border-gray-500 px-3">#</th>
                    <th class="border border-gray-500 px-3 py-2">Name
                        {{-- route helper -> adding search param by using key=>value array --}}
                        <a href="{{ route('inventory.index', ['name' => 'asc']) }}" class="btn btn-outline-dark">ASC</a>
                        <a href="{{ route('inventory.index', ['name' => 'desc']) }}" class="btn btn-outline-dark">DESC</a>
                        <a href="{{ route('inventory.index') }}" class="btn btn-outline-danger">Clear</a>
                    </th>
                    <th class="border border-gray-500 px-3">Price</th>
                    <th class="border border-gray-500 px-3">Stock</th>
                    <th class="border border-gray-500 px-3">Controls</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr class="h-[40px]">
                        <td class="border border-gray-500 px-3 text-right"> {{ $item->id }} </td>
                        <td class="border border-gray-500 px-3"> {{ $item->name }} </td>
                        <td class="border border-gray-500 px-3 text-right"> {{ $item->price }} MMK </td>
                        <td class="border border-gray-500 px-3 text-right"> {{ $item->stock }} </td>
                        <td class="border border-gray-500 px-3 text-right">

                            <div class="flex flex-col md:flex-row items-center justify-center gap-2 py-2 ">
                                <a href="{{ route('inventory.show', $item->id) }}"
                                    class="border border-blue-700 px-[20px] py-[5px] rounded text-blue-700 hover:bg-blue-700 hover:text-white duration-200">Detail</a>

                                <a href="{{ route('inventory.edit', $item->id) }}"
                                    class="border border-gray-800 px-[20px] py-[5px] rounded text-gray-800 hover:bg-gray-800 hover:text-white duration-200">Edit</a>

                                <form action="{{ route('inventory.destroy', $item->id) }}" method="POST" class="">
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
                        <td colspan="5" class="text-center border border-gray-500 py-3">
                            <div class="flex flex-col items-center gap-2 ">
                                <h2 class="text-lg font-medium">There is no record now!</h2>
                                <a href="{{ route('inventory.create') }}"
                                    class="px-5 py-[6px] rounded bg-blue-700 text-white hover:bg-blue-600 duration-200">Create
                                    One</a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3">
            {{ $items->onEachSide(1)->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
