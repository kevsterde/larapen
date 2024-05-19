@extends('layout.layout')
@section('title', 'Editor')


@section('content')

 <form action="{{ route('editor.add') }}" method="post">
    @csrf
    @method('post')
    <div class="flex justify-between items-center p-4 gap-4">
        <section class="flex w-80 max-w-full justify-center gap-2 items-center">
            <figure class="aspect-square w-24"><img src="https://picsum.photos/300/300" alt=""></figure>
            <div class="text-white">
                <h1 class="text-xl font-bold">Rhysin Villahermosa</h1>
                <section class="flex justify-start gap-2 items-center mt-2">
                    <button class="py-1 px-4 bg-primaryColor text-white">Follow</button>
                    <button class="py-1 px-4 bg-primaryColor text-white">Heart</button>
                </section>
            </div>
        </section>

        <div class="text-center flex-1 text-xl text-white font-bold">
            
            <input type="text" name="codetitle" value="Card w Vertical Text"
                class="text-5xl text-white bg-transparent focus:outline-none w-full text-center px-2 border-b-2 focus:border-b-2
                border-transparent focus:border-white">
        </div>


        <div>
            <button type="submit" class="py-1 px-4 bg-primaryColor text-white">Save</button>
            <button type="button" class="py-1 px-4 bg-secondaryColor text-white">Align</button>
        </div>

    </div>


    <div class="w-full min-h-[80vh] flex flex-col gap-5 px-4 pb-4">
        <div>
            <div class="flex justify-between gap-5">
                <div class="w-full relative pt-9">
                    <div class="absolute w-full top-0 left-0 right-0 bg-secondaryColor px-2">
                        <h2 class="text-xl text-white font-bold inline-block leading-9">HTML</h2>
                    </div>
                    <textarea id="html-code" name="htmlcode"
                        class="px-5 box-border w-full min-h-32 bg-secondaryColor bg-opacity-20  h-full text-white focus:outline-none"></textarea>
                </div>
                <div class="w-full relative pt-9">
                    <div class="absolute w-full top-0 left-0 right-0 bg-secondaryColor px-2">
                        <h2 class="text-xl text-white font-bold inline-block leading-9">CSS</h2>
                    </div>
                    <textarea id="css-code" name="csscode"
                        class="px-5 box-border w-full min-h-32 bg-secondaryColor bg-opacity-20  h-full text-white focus:outline-none"></textarea>
                </div>
                <div class="w-full relative pt-9">
                    <div class="absolute w-full top-0 left-0 right-0 bg-secondaryColor px-2">
                        <h2 class="text-xl text-white font-bold inline-block leading-9">Javascript</h2>
                    </div>
                    <textarea id="js-code" name="jscode"
                        class="px-5 box-border w-full min-h-32 bg-secondaryColor bg-opacity-20  h-full text-white focus:outline-none"></textarea>
                </div>
            </div>
        </div>


        <div class="w-full bg-white grow relative">
            <iframe id="editor-output" class="w-full h-full absolute inset-0"></iframe>
        </div>

    </div>
 </form>

@endsection


@push('scripts')
    <script src="{{ asset('js/editor-script.js') }}"></script>

@endpush
