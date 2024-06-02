<!-- https://gist.github.com/goodreds/5b8a4a2bf11ff67557d38c5e727ea86c -->

<div
    class="max-w-2xl mx-4 sm:max-w-sm md:max-w-sm lg:max-w-sm xl:max-w-sm   bg-white shadow-xl rounded-lg text-gray-900 self-start">
    <div class="rounded-t-lg h-32 overflow-hidden">
        <img class="object-cover object-top w-full"
            src='https://images.unsplash.com/photo-1549880338-65ddcdfd017b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ'
            alt='Mountain'>
    </div>
    <div class="mx-auto w-32 h-32 relative -mt-16 border-4 border-white rounded-full overflow-hidden">
        <img class="object-cover object-center h-32"
            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed={{ $user->name }}" alt='{{ $user->name }}'>
    </div>
    <div class="text-center mt-2 px-5">
        <h2 class="font-semibold text-3xl">{{ $user->name }}</h2>
        <p class="text-gray-500">{{ $user->email }}</p>
        <div class="text-left border-t mt-2">
            <h3 class="font-xl">Bio:</h3>
            <p class="text-gray-500">{{ $user->bio }}</p>
        </div>


    </div>
    <ul class="py-4 mt-2 text-gray-700 flex items-center justify-around">
        <li class="flex flex-col items-center justify-around">

            <svg class="w-4 fill-current text-blue-900" width="16px" height="16px" viewBox="0 0 32 32"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                preserveAspectRatio="xMidYMid meet">
                <path d="M16 29S2 19 2 10a7 7 0 0 1 14 0 7 7 0 0 1 14 0c0 9-14 19-14 19z" />
            </svg>


            <div>{{ $user->love->count() }}</div>
        </li>
        <li class="flex flex-col items-center justify-between">
            <svg class="w-4 fill-current text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M7 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 0 1 7 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 1 1-1.33 7.76 5.96 5.96 0 0 0 0-7.52C12.1.1 12.53 0 13 0z" />
            </svg>
            <div>{{ $user->followers->count() }}</div>
        </li>
        <li class="flex flex-col items-center justify-around">
            <svg class="w-[21px] h-[21px] text-gray-800 dark:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#1e3a8a" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M14 4.182A4.136 4.136 0 0 1 16.9 3c1.087 0 2.13.425 2.899 1.182A4.01 4.01 0 0 1 21 7.037c0 1.068-.43 2.092-1.194 2.849L18.5 11.214l-5.8-5.71 1.287-1.31.012-.012Zm-2.717 2.763L6.186 12.13l2.175 2.141 5.063-5.218-2.141-2.108Zm-6.25 6.886-1.98 5.849a.992.992 0 0 0 .245 1.026 1.03 1.03 0 0 0 1.043.242L10.282 19l-5.25-5.168Zm6.954 4.01 5.096-5.186-2.218-2.183-5.063 5.218 2.185 2.15Z"
                    clip-rule="evenodd" />
            </svg>


            <div>{{ $user->editors->count() }}</div>
        </li>
    </ul>

    @if ($user->id !== auth()->user()->id)
        <div class="p-4 border-t mx-8 mt-2">
            @if (Auth::user() && Auth::user()->follows($user))
                <form action="{{ route('user.unfollow', $user) }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-1/2 block mx-auto rounded-full bg-red-900 hover:shadow-lg font-semibold text-white px-6 py-2">Unfollow</button>
                </form>
            @else
                <form action="{{ route('user.follow', $user) }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-1/2 block mx-auto rounded-full bg-primaryColor hover:shadow-lg font-semibold text-white px-6 py-2">Follow</button>
                </form>
            @endif
        </div>
    @endif
</div>
