<nav class="flex items-center justify-between flex-wrap bg-primaryColor p-2 items-center px-4">

    <a href={{ route('home') }} class="flex gap-2 items-center">
        <img class="w-10" src="/images/logo.png" alt="logo">
        <h5 class="text-white text-2xl font-bold uppercase">Larapen</h5>
    </a>



    <form class="max-w-2xl mx-auto w-full" action="{{ route('home') }}" method="GET">
        <label for="default-search" class="mb-2 text-sm font-medium text-fff sr-only ">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-black " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>

            <input type="search" id="default-search" value="{{ request('search', '') }}"
                class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 "
                placeholder="Search Title" name="search" required />
            <button type="submit"
                class="text-white absolute end-2.5 bottom-[5px] bg-primaryColor hover:bg-secondaryColor focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
        </div>
    </form>



    @if (Route::has('login'))
        <div class=" text-right flex gap-2 items-center">
            @auth
                <a href={{ route('editor') }}
                    class="bg-secondaryColor  hover:ring-2 hover:ring-white text-white font-bold py-2 px-4 rounded inline-flex items-center h-[54px]">
                    <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M14 4.182A4.136 4.136 0 0 1 16.9 3c1.087 0 2.13.425 2.899 1.182A4.01 4.01 0 0 1 21 7.037c0 1.068-.43 2.092-1.194 2.849L18.5 11.214l-5.8-5.71 1.287-1.31.012-.012Zm-2.717 2.763L6.186 12.13l2.175 2.141 5.063-5.218-2.141-2.108Zm-6.25 6.886-1.98 5.849a.992.992 0 0 0 .245 1.026 1.03 1.03 0 0 0 1.043.242L10.282 19l-5.25-5.168Zm6.954 4.01 5.096-5.186-2.218-2.183-5.063 5.218 2.185 2.15Z"
                            clip-rule="evenodd" />
                    </svg>



                </a>
                <a href="/profile"
                    class="flex gap-1 items-center text-left p-1 bg-white rounded leading-[100%] hover:ring-2 hover:ring-white">
                    <img src="https://api.dicebear.com/6.x/fun-emoji/svg?seed={{ auth()->user()->name }}"
                        alt='{{ auth()->user()->name }}' class="w-[44px]  aspect-square rounded ">
                    <span>Welcome, <br>{{ auth()->user()->name }}</span>
                </a>



                <form action="{{ route('logout') }}" method="POST">
                    @csrf



                    <button type="submit"
                        class="font-semibold text-white hover:text-secondaryColor  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500
                        bg-red-900  hover:ring-2 hover:ring-white text-white font-bold py-2 px-4 rounded inline-flex items-center h-[54px]
                        ">

                        <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                        </svg>

                    </button>
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-white hover:text-secondaryColor  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>


            @endauth
        </div>
    @endif



</nav>
