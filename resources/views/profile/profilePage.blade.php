@extends('layout.layout')


@section('title', 'Profile')

@section('content')


    <div class="flex gap-2 mt-4">
        @include('profile.card')

        <div class="w-full flex flex-col items-center gap-4">
            <div class="w-fit bg-white flex gap-2 items-center px-4 py-1 rounded mt-10">
                <h2 class="text-xl font-bold mr-4">Showcase</h2>

                <a href="{{ route('otherprofile', ['user' => $user->id, 'type' => 'pens']) }}"
                    class="px-3 py-1 {{ request('type') !== 'love' ? 'bg-gray-800 text-white' : 'text-gray-800 hover:bg-gray-800 hover:text-white' }} rounded mx-2">My
                    Pens</a>


                @auth
                    @if (Auth::user()->id === $user->id)
                        <a href="{{ route('otherprofile', ['user' => $user->id, 'type' => 'love']) }}"
                            class="px-3 py-1 {{ request('type') === 'love' ? 'bg-gray-800 text-white' : 'text-gray-800 hover:bg-gray-800 hover:text-white' }} rounded mx-2">Loved
                            Pens</a>
                    @endif
                @endauth

            </div>
            <div class="flex gap-4 w-full flex-wrap  px-4 justify-center">


                @forelse ($pens as $pen)
                    @include('components.editorCard')
                @empty
                    <h1>No Data</h1>
                @endforelse

            </div>
        </div>
    </div>

@endsection
