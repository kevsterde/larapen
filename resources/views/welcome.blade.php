@section('title', 'Home')

@extends('layout.layout')

@section('content')

    @include('components.navigation')

    <div class="relative flex flex-wrap gap-5 justify-center p-10">
        @include('components.editorCard')
        @include('components.editorCard')
        @include('components.editorCard')
        @include('components.editorCard')
        @include('components.editorCard')
        @include('components.editorCard')
        @include('components.editorCard')
        @include('components.editorCard')
        @include('components.editorCard')
        @include('components.editorCard')
        @include('components.editorCard')
        @include('components.editorCard')
    </div>

@endsection
