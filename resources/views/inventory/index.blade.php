@extends('layouts.master')

@section('title')
    Items List
@endsection

@section('contents')

    <div class="">
        <h2 class="text-xl font-bold text-yellow-700">List Items</h2>

        <table class=" w-full bg-gray-50 rounded">
            <thead>
                <tr class="h-[40px] text-lg">
                    <th class="border border-gray-500">#</th>
                    <th class="border border-gray-500">Name</th>
                    <th class="border border-gray-500">Price</th>
                    <th class="border border-gray-500">Stock</th>
                    <th class="border border-gray-500">Controls</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                <tr class="h-[40px]">
                    <td class="border border-gray-500 px-3 text-right"> {{$item->id}} </td>
                    <td class="border border-gray-500 px-3"> {{$item->name}} </td>
                    <td class="border border-gray-500 px-3 text-right"> {{$item->price}} MMK </td>
                    <td class="border border-gray-500 px-3 text-right"> {{$item->stock}} </td>
                    <td class="border border-gray-500 px-3 text-right">

                            <div class="flex flex-col md:flex-row items-center justify-center gap-2 py-2 ">
                                <a href="{{route("inventory.show", $item->id)}}" class="border border-blue-700 px-5 py-[5px] rounded text-blue-700 hover:bg-blue-700 hover:text-white duration-200">Detail</a>

                                <a href="{{route("inventory.edit", $item->id)}}" class="border border-gray-800 px-5 py-[5px] rounded text-gray-800 hover:bg-gray-800 hover:text-white duration-200">Edit</a>

                            <form action="{{route("inventory.destroy", $item->id)}}" method="POST" class="">
                                @method("delete")
                                @csrf
                            <button class="border border-red-700 px-5 py-[5px] rounded text-red-700 hover:bg-red-700 hover:text-white duration-200">Delete</button>

                            </form>
                            </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center border border-gray-500 py-3">
                        <div class="flex flex-col items-center gap-2 ">
                            <h2 class="text-lg font-medium">There is no record now!</h2>
                        <a href="{{route('inventory.create')}}" class="px-5 py-[6px] rounded bg-blue-700 text-white hover:bg-blue-600 duration-200">Create One</a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
