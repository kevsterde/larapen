<nav class="flex items-center justify-between flex-wrap bg-primaryColor p-6 items-center">

    <a href={{ route('home') }} class="flex gap-2 items-center">
        <img class="w-10 sm:w-16" src="/images/logo.png" alt="logo">
        <h5 class="text-white text-5xl">Larapen</h5>
    </a>



    <form class="max-w-2xl mx-auto w-full">
        <label for="default-search" class="mb-2 text-sm font-medium text-fff sr-only ">Search</label>
        <div class="relative ]">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-black " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 "
                placeholder="Search Title" required />
            <button type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-primaryColor hover:bg-secondaryColor focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
        </div>
    </form>



    @if (Route::has('login'))
        <div class="p-6 text-right flex gap-4 items-center">
            @auth
                <a href={{ route('editor') }}
                    class="bg-secondaryColor hover:opacity-50 text-white font-bold py-2 px-4 rounded inline-flex items-center h-[54px]">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                    </svg>
                    <span>Create New Pen</span>
                </a>
                <a href="/profile">
                    <img src="https://picsum.photos/200/300?random=1" alt=""
                        class="w-[54px]  aspect-square rounded hover:ring-2 hover:ring-yellow-400">
                </a>

                <a href="{{ url('/logout') }}"
                    class="font-semibold text-white hover:text-secondaryColor  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Logout</a>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-white hover:text-secondaryColor  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-white hover:text-secondaryColor  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif



</nav>
