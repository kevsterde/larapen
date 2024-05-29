@section('title', 'Home')

@extends('layout.layout')

@section('content')


    <div class="relative flex flex-wrap gap-5 justify-center p-10">
        @forelse ($pens as $pen)
            @include('components.editorCard')
        @empty
            <h1>No Data</h1>
        @endforelse
    </div>

@endsection
