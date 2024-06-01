@extends('layout.layout')
@section('title', 'Editor')


@section('content')

    <form
        action="{{ isset($editor) ? route('editor.update', ['user_id' => $editor->user_id, 'id' => $editor->code_id]) : route('editor.add') }}"
        method="post">
        @auth @csrf @endauth

        @if (isset($editor))
            @method('PUT')
        @else
            @method('POST')
        @endif


        <div class="flex justify-between items-center p-4 gap-4">
            <div class="text-left flex-1 text-xl text-white font-bold flex items-center gap-2">

                @if (isset($editor) && auth()->user() != $editor->user)
                    <h1 class="text-4xl">Title: {{ $editor->title }}</h1>
                @else
                    <h1 class="text-4xl">Title:</h1> <input type="text" name="title"
                        value="{{ isset($editor) ? $editor->title : 'Dummy Title' }}"
                        class="text-4xl text-white bg-transparent focus:outline-none w-full  px-2 border-b-2 focus:border-b-2
                  border-gray-900 focus:border-white">
                @endif
            </div>
            <div>
                @if (isset($editor))
                    @if ($editor->user == auth()->user())
                        <button type="submit"
                            class="  text-white p-4 bg-green-700 rounded  hover:ring-2 hover:ring-white ">

                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V7.414A2 2 0 0 0 20.414 6L18 3.586A2 2 0 0 0 16.586 3H5Zm10 11a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7V5h8v2a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </button>
                    @endif
                @endif

                @if (!isset($editor))
                    <button type="submit" class="  text-white p-4 bg-green-700 rounded  hover:ring-2 hover:ring-white ">

                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V7.414A2 2 0 0 0 20.414 6L18 3.586A2 2 0 0 0 16.586 3H5Zm10 11a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7V5h8v2a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd" />
                        </svg>

                    </button>
                @endif

                {{-- <button type="button" class="py-1 px-4 bg-secondaryColor text-white">Align</button> --}}

            </div>

        </div>


        <div class="w-full min-h-[90vh] flex flex-col gap-5  ">
            <div class="px-4">
                <div class="flex justify-between gap-5">
                    <div class="w-full relative pt-9">
                        <div
                            class="absolute w-fit top-0 left-0 right-0 bg-[#272822] px-2 flex gap-1 items-center leading-[100%]">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="m3 2 1.578 17.824L12 22l7.467-2.175L21 2H3Zm14.049 6.048H9.075l.172 2.016h7.697l-.626 6.565-4.246 1.381-4.281-1.455-.288-2.932h2.024l.16 1.411 2.4.815 2.346-.763.297-3.005H7.416l-.562-6.05h10.412l-.217 2.017Z" />
                            </svg>

                            <h2 class="text-l text-white font-bold inline-block leading-9">HTML</h2>
                        </div>

                        <textarea id="html-code" name="htmlcode" class="hidden">{{ old('htmlcode', isset($editor) ? $editor->htmlcode : '') }}</textarea>
                        <div id="editorHTML" class=" box-border w-full min-h-44 h-full text-white focus:outline-none">
                            {{ old('htmlcode', isset($editor) ? $editor->htmlcode : '') }}</div>
                    </div>
                    <div class="w-full relative pt-9">
                        <div class="absolute w-full top-0 left-0 right-0 bg-secondaryColor px-2">
                            <h2 class="text-xl text-white font-bold inline-block leading-9">CSS</h2>
                        </div>
                        <textarea id="css-code" name="csscode"
                            class="px-5 box-border w-full min-h-44 bg-secondaryColor bg-opacity-20  h-full text-white focus:outline-none">{{ old('csscode', isset($editor) ? $editor->csscode : '') }}</textarea>
                    </div>
                    <div class="w-full relative pt-9">
                        <div class="absolute w-full top-0 left-0 right-0 bg-secondaryColor px-2">
                            <h2 class="text-xl text-white font-bold inline-block leading-9">Javascript</h2>
                        </div>
                        <textarea id="js-code" name="jscode"
                            class="px-5 box-border w-full min-h-44 bg-secondaryColor bg-opacity-20  h-full text-white focus:outline-none">{{ old('jscode', isset($editor) ? $editor->jscode : '') }}</textarea>
                    </div>
                </div>
            </div>
    </form>

    <div class="w-full bg-white grow relative ">
        <section
            class="flex w-80 max-w-fit justify-center gap-2 opacity-30 hover:opacity-100 bg-gray-900 p-2 absolute z-50 top-0">

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

                @include('Editor.follow')




            </div>
        </section>

        <iframe id="editor-output" class="w-full h-full absolute inset-0"></iframe>
    </div>

    </div>


@endsection




@push('scripts')
    <script src="https://ajaxorg.github.io/ace-builds/src-min-noconflict/ace.js"></script>
    <script src="{{ asset('js/editor-script.js') }}"></script>
@endpush
