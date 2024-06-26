@section('title', 'Home')

@extends('layout.layout')

@section('content')


    <div class="relative flex flex-wrap gap-5  p-10 min-h-screen ">
        @forelse ($pens as $pen)
            @include('components.editorCard')
        @empty
            <h1>No Data</h1>
        @endforelse
        <div class="mt-3 w-full self-end">
            {{ $pens->withQueryString()->links() }}
        </div>
    </div>

@endsection
