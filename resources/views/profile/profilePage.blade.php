@extends('layout.layout')


@section('title', 'Profile')

@section('content')


    <div class="flex gap-2 mt-4">
        @include('profile.card')

        <div class="flex gap-4 w-full flex-wrap justify-between px-4">
            <div class="w-full bg-white flex gap-2 items-center px-4 py-1 rounded">
                <h2 class="text-xl font-bold mr-4">Showcase</h2>
                <button class=" px-3 py-1 bg-gray-800 text-white rounded mx-2">Popular</button>
                <button class="text-gray-800 px-3 py-1 hover:bg-gray-800 hover:text-white rounded mx-2">Public</button>
                <button class="text-gray-800 px-3 py-1 hover:bg-gray-800 hover:text-white rounded mx-2">Private</button>
                <button class="text-gray-800 px-3 py-1 hover:bg-gray-800 hover:text-white rounded mx-2">Loved</button>
            </div>

            @forelse ($pens as $pen)
                @include('components.editorCard')
            @empty
                <h1>No Data</h1>
            @endforelse

        </div>
    </div>

@endsection
