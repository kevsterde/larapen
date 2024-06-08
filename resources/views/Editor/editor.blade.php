@extends('layout.layout')
@section('title', 'Editor')


@section('content')

    {{-- <form action="{{ isset($editor) ? route('editor.update', $editor->user_id, $editor->code_id) : route('editor.add') }}"
        method="post"> --}}

    <form
        action="{{ isset($editor) ? route('editor.update', ['user' => $editor->user_id, 'editor' => $editor->code_id]) : route('editor.add') }}"
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

            </div>

        </div>


        <div class="w-full min-h-[90vh] flex flex-col gap-5  ">
            <div class="px-4">
                <div class="flex justify-between gap-5">
                    <div class="w-full relative pt-9">
                        <div
                            class="absolute w-fit top-0 left-0 right-0 bg-[#272822] px-2 flex gap-1 items-center leading-[100%]">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#e5532d"
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
                        <div
                            class="absolute w-fit top-0 left-0 right-0 bg-[#272822] px-2 flex gap-1 items-center leading-[100%]">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#254bdd"
                                viewBox="0 0 24 24">
                                <path
                                    d="m3 2 1.578 17.834L12 22l7.468-2.165L21 2H3Zm13.3 14.722-4.293 1.204H12l-4.297-1.204-.297-3.167h2.108l.15 1.526 2.335.639 2.34-.64.245-3.05h-7.27l-.187-2.006h7.64l.174-2.006H6.924l-.176-2.006h10.506l-.954 10.71Z" />
                            </svg>


                            <h2 class="text-l text-white font-bold inline-block leading-9">CSS</h2>
                        </div>


                        <textarea id="css-code" name="csscode" class="hidden">{{ old('csscode', isset($editor) ? $editor->csscode : '') }}</textarea>
                        <div id="editorCSS" class=" box-border w-full min-h-44 h-full text-white focus:outline-none">
                            {{ old('csscode', isset($editor) ? $editor->csscode : '') }}</div>


                    </div>
                    <div class="w-full relative pt-9">
                        <div
                            class="absolute w-fit top-0 left-0 right-0 bg-[#272822] px-2 flex gap-1 items-center leading-[100%]">
                            <svg width="24px" height="24px" viewBox="0 0 256 256" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                preserveAspectRatio="xMidYMid">
                                <g>
                                    <path d="M0,0 L256,0 L256,256 L0,256 L0,0 Z" fill="#F7DF1E">

                                    </path>
                                    <path
                                        d="M67.311746,213.932292 L86.902654,202.076241 C90.6821079,208.777346 94.1202286,214.447137 102.367086,214.447137 C110.272203,214.447137 115.256076,211.354819 115.256076,199.326883 L115.256076,117.528787 L139.313575,117.528787 L139.313575,199.666997 C139.313575,224.58433 124.707759,235.925943 103.3984,235.925943 C84.1532952,235.925943 72.9819429,225.958603 67.3113397,213.93026"
                                        fill="#000000">

                                    </path>
                                    <path
                                        d="M152.380952,211.354413 L171.969422,200.0128 C177.125994,208.433981 183.827911,214.619835 195.684368,214.619835 C205.652521,214.619835 212.009041,209.635962 212.009041,202.762159 C212.009041,194.513676 205.479416,191.592025 194.481168,186.78207 L188.468419,184.202565 C171.111213,176.81473 159.597308,167.53534 159.597308,147.944838 C159.597308,129.901308 173.344508,116.153295 194.825752,116.153295 C210.119924,116.153295 221.117765,121.48094 229.021663,135.400432 L210.29059,147.428775 C206.166146,140.040127 201.699556,137.119289 194.826159,137.119289 C187.78047,137.119289 183.312254,141.587098 183.312254,147.428775 C183.312254,154.646349 187.78047,157.568406 198.089956,162.036622 L204.103924,164.614095 C224.553448,173.378641 236.067352,182.313448 236.067352,202.418387 C236.067352,224.071924 219.055137,235.927975 196.200432,235.927975 C173.860978,235.927975 159.425829,225.274311 152.381359,211.354413"
                                        fill="#000000">

                                    </path>
                                </g>
                            </svg>


                            <h2 class="text-l text-white font-bold inline-block leading-9">Javascript</h2>
                        </div>
                        {{--
                        <textarea id="js-code" name="jscode"
                            class="px-5 box-border w-full min-h-44 bg-secondaryColor bg-opacity-20  h-full text-white focus:outline-none">{{ old('jscode', isset($editor) ? $editor->jscode : '') }}</textarea> --}}


                        <textarea id="js-code" name="jscode" class="hidden">{{ old('jscode', isset($editor) ? $editor->jscode : '') }}</textarea>
                        <div id="editorJS" class=" box-border w-full min-h-44 h-full text-white focus:outline-none">
                            {{ old('jscode', isset($editor) ? $editor->jscode : '') }}</div>



                    </div>
                </div>
            </div>
    </form>

    <div class="w-full bg-white grow relative ">
        @include('Editor._modules.editorProfile')

        <iframe id="editor-output" class="w-full h-full absolute inset-0"></iframe>
    </div>

    </div>


@endsection




@push('scripts')
    <script src="https://ajaxorg.github.io/ace-builds/src-min-noconflict/ace.js"></script>
    <script src="{{ asset('js/editor-script.js') }}"></script>
@endpush
