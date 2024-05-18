@extends('layout.layout')
@section('title', 'Login')


@section('content')

    <div class="sm:max-w-xl sm:mx-auto p-10 mt-10">
        <a href={{ route('home') }}><img class=" w-24 sm:w-40 mx-auto mb-5" src="/images/logo.png" alt="logo"></a>
        <h1 class="text-white text-center text-4xl font-bold uppercase">Sign in to Larapen</h1>

        <form action="" class="backdrop-blur-3xl bg-[#D9D9D9] bg-opacity-20 rounded-lg p-5 mt-4">
            <div class=" mt-3">
                <div class="relative mb-5">
                    <input type="text" id="email" name="email"
                        class="block rounded px-2.5 pb-2.5 pt-5 w-full text-sm text-white bg-[#003C43] bg-opacity-50  focus:outline-none focus:ring-0 focus:border-white peer  border border-1 border-white"
                        placeholder=" " />

                    <label for="email"
                        class="absolute text-sm text-white  duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email</label>

                    <p id="filled_error_help" class="mt-2 text-xs text-red-600 "><span class="font-medium">Oh, snapp!</span>
                        Some error message.</p>
                </div>

                <div class="relative mb-5">
                    <input type="password" id="password" name="password"
                        class="block rounded px-2.5 pb-2.5 pt-5 w-full text-sm text-white bg-[#003C43] bg-opacity-50 focus:outline-none focus:ring-0 focus:border-white peer  border border-1 border-white"
                        placeholder=" " />

                    <label for="floating_filled"
                        class="absolute text-sm text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Password</label>
                </div>

                <div class="relative">
                    <input type="submit" name="submit"
                        class="text-gray-900  border border-gray-300 focus:outline-none bg-primaryColor focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-xl px-5 py-2.5 me-2 mb-2 text-white hover:bg-secondaryColor transition w-full  cursor-pointer "
                        value="Sign In">
                </div>

                <div class="text-center flex justify-between text-white">
                    <a href={{ route('forgotpassword') }} class="hover:underline">Reset Password</a>
                    <a href="/register" class="hover:underline">No Account? Create here</a>
                </div>
            </div>

        </form>

    </div>

@endsection
