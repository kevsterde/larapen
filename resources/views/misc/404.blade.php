@section('title', '404')


@extends('layout.layout')


@section('content')
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="mb-4 text-7xl text-white font-extrabold lg:text-9xl ">
                    404</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Something's
                    missing.</p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Sorry, we can't find that page. You'll
                    find lots to explore on the home page. </p>
                <a href="{{ route('home') }}"
                    class="inline-flex text-gray hover:text-white bg-white hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back
                    to Homepage</a>
            </div>
        </div>
    </section>
@endsection
