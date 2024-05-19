@extends('layout.layout')
@section('title', 'Register')


@section('content')

    <div class="sm:max-w-xl sm:mx-auto p-10 mt-10">
        <a href={{ route('home') }}><img class=" w-24 sm:w-40 mx-auto mb-5" src="/images/logo.png" alt="logo"></a>
        <h1 class="text-white text-center text-4xl font-bold uppercase">Welcome To Larapen</h1>

        <form action={{ route('register') }} class="rounded-lg p-5 mt-4 bg-[#D9D9D9] bg-opacity-20 backdrop-blur-md"
            method="POST">
            @csrf
            <div class=" mt-3">
                <div class="relative mb-5">
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="bg-opacity-50 block rounded px-2.5 pb-2.5 pt-5 w-full text-sm text-white bg-primaryColor  appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-white peer  border border-1 border-white"
                        placeholder=" " />

                    <label for="name"
                        class="absolute text-sm text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Username</label>
                    @error('name')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-5">
                    <input type="text" id="email" name="email" value="{{ old('email') }}"
                        class="bg-opacity-50 block rounded px-2.5 pb-2.5 pt-5 w-full text-sm text-white bg-primaryColor  appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-white peer  border border-1 border-white"
                        placeholder=" " />

                    <label for="email"
                        class="absolute text-sm text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email</label>
                    @error('email')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-5">
                    <input type="text" id="password" name="password" value="{{ old('password') }}"
                        class="bg-opacity-50 block rounded px-2.5 pb-2.5 pt-5 w-full text-sm text-white bg-primaryColor  appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-white peer  border border-1 border-white"
                        placeholder=" " />

                    <label for="password"
                        class="absolute text-sm text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Password</label>
                    @error('password')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-5">
                    <input type="text" id="password_confirmation" name="password_confirmation"
                        value="{{ old('password_confirmation') }}"
                        class="bg-opacity-50 block rounded px-2.5 pb-2.5 pt-5 w-full text-sm text-white bg-primaryColor appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-white peer  border border-1 border-white"
                        placeholder=" " />

                    <label for="password_confirmation"
                        class="absolute text-sm text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Confirm
                        Password</label>
                    @error('password')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <input type="submit" name="submit"
                        class="text-gray-900  border border-gray-300 focus:outline-none bg-primaryColor focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-xl px-5 py-2.5 me-2 mb-2 text-white hover:bg-secondaryColor transition w-full uppercase cursor-pointer"
                        value="submit">
                </div>


                <div class="text-center text-white">
                    Already in Larapen? <a href="/login" class="hover:underline">Sign In</a>

                </div>


            </div>

        </form>


    </div>

@endsection
