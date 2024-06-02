<section class="flex w-fit gap-2 opacity-30 hover:opacity-100 bg-gray-900 p-2 absolute z-50 top-0 rounded-b-md left-4">

    <a href="{{ isset($editor) ? route('otherprofile', $editor->user) : route('profile') }}"
        class="hover:ring-white hover:ring-2 rounded-lg overflow-hidden">
        <figure class="aspect-square w-14 "> <img
                src="https://api.dicebear.com/6.x/fun-emoji/svg?seed={{ isset($editor) ? $editor->user->name : auth()->user()->name }}"
                alt='{{ isset($editor) ? $editor->user->name : auth()->user()->name }}'></figure>
    </a>
    <div class="text-white ">

        @if (isset($editor))
            <h1 class="text-l font-bold">{{ $editor->user->name }}</h1>
        @else
            <h1 class="text-l font-bold">{{ Auth::user()->name }}</h1>
        @endif

        @include('Editor._modules.follow')



    </div>
</section>
