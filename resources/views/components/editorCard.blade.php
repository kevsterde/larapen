<div class="w-[24%] bg-gray-900 relative rounded-lg mt-[100px] p-4">
    <a class="absolute inset-0" href={{ route('editor.display', ['user_id' => $pen->user, 'id' => $pen->code_id]) }}></a>
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

    </div>

</div>
