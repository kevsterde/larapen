<a href={{ route('editor.display', ['user_id' => $pen->user, 'id' => $pen->code_id]) }}
    class="w-[32%] bg-white aspect-[16/4] ">
    <div class="w-full aspect-[16/7] bg-gray-900">
        iframe here
    </div>


    <div class="flex p-2 gap-2">

        <figure class="aspect-square w-14"> <img
                src="https://api.dicebear.com/6.x/fun-emoji/svg?seed={{ $pen->user->name }}" alt='{{ $pen->user->name }}'>
        </figure>

        <div class="text-gray-900">
            <h2 class="text-2xl">{{ $pen->title }}</h2>
            <h3 class="text-sm">{{ $pen->user->name }}</h3>
        </div>

    </div>

</a>
