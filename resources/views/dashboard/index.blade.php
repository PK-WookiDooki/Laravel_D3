@extends('layouts.master')

@section('title')
    Dashboard Home
@endsection

@section('contents')
    <h2 class="text-xl font-bold  mb-6
    ">DashBoard Home</h2>

    @if (session('message'))
        <div class=" alert alert-success mb-3">
            {{ session('message') }}
        </div>
    @endif

    {{-- route helper --}}
    {{-- <div class=" alert alert-info">{{ route('inventory.show', [12, 'aaa' => 'triple a']) }}</div> --}}
    {{-- <div class="group tracking-wide">
        <h1 class="text-xl font-bold text-red-700 mb-[15px]">Meet Laravel</h1>
        <div class="text-gray-500 group-hover:text-black duration-100 ">
            <p class="mb-[10px]">
                Laravel is a web application framework with
                expressive,
                elegant syntax. A web framework
                provides a structure and
                starting point for creating your application, allowing you to focus on creating something amazing while we
                sweat
                the
                details.
            </p>


        </div>
    </div> --}}

    <table class="table">
        <tbody>
            <tr class=" align-middle">
                <td colspan="3" class="w-full">{{ session('auth')->name }}</td>
                <td>
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button class="bg-red-500 hover:bg-red-700 text-white font-medium py-2 px-4 rounded">
                            Logout
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
