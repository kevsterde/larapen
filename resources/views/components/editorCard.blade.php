<div
    class="w-[24%] bg-[#1c1f26] relative rounded-xl mt-[100px] p-4 border border-solid border-white shadow-2xl self-start">
    <a class="absolute inset-0"
        href={{ route('editor.display', ['user' => $pen->user, 'editor' => $pen->code_id]) }}></a>
    <div class="w-full aspect-[16/11] bg-white overflow-hidden border border-solid rounded-lg mt-[-100px] ">
        <iframe class="pointer-events-none overflow-hidden" src={{ route('iframeContent', $pen->code_id) }}
            frameborder="0" width="100%" height="100%"></iframe>
    </div>


    <div class="mt-4 text-center">
        <div class="text-white">
            <h2 class="text-2xl">{{ $pen->title }}</h2>
            <h3 class="text-sm">Pen by <b><a class="relative hover:underline"
                        href="{{ route('otherprofile', $pen->user) }}">{{ $pen->user->name }}</a></b></h3>
        </div>


        @if ($pen->user == auth()->user() && Route::is('otherprofile'))
            <form action="{{ route('editor.destroy', ['editor' => $pen, 'user' => auth()->user()]) }}" method="POST">
                @csrf
                @method('delete')

                <button type="submit" class="absolute right-2 bottom-2 "><svg
                        class="w-6 h-6 text-red-800 hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        @endif

    </div>


</div>
