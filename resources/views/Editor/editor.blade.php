@push('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush

@extends('layout.layout')
@section('title', 'Editor')


@section('content')

<div class="flex justify-between items-center mb-10">
    <section class="flex w-80 max-w-full justify-between items-center">
        <figure class="aspect-square w-24"><img src="https://picsum.photos/300/300" alt=""></figure>
        <div class="text-white">
            <h1 class="text-xl font-bold">Rhysin Villahermosa</h1>
            <section class="flex justify-start gap-5 items-center mt-2">
                <button class="py-1 px-4 bg-primaryColor text-white">Follow</button>
                <button class="py-1 px-4 bg-primaryColor text-white">Heart</button>
            </section>
        </div>
    </section>

    <div class="text-center flex-1 text-xl text-white font-bold">
        <h1>Card w Vertical Text</h1>
    </div>

  
       <div>
        <button class="py-1 px-4 bg-primaryColor text-white">Save</button>
        <button class="py-1 px-4 bg-secondaryColor text-white">Align</button>
       </div>
    
</div>


<div class="w-full min-h-[80vh] flex flex-col gap-5 ">
    <div>
        <div class="flex justify-between gap-5">
            <div class="w-full relative pt-9" >
               <div class="absolute w-full top-0 left-0 right-0 bg-secondaryColor px-2"> <h2 class="text-xl text-white font-bold inline-block">HTML</h2></div>
                <textarea id="html-code" class="px-5 box-border w-full min-h-32 bg-secondaryColor bg-opacity-20  h-full text-white"></textarea> 
            </div>
            <div class="w-full relative pt-9" >
               <div class="absolute w-full top-0 left-0 right-0 bg-secondaryColor px-2"> <h2 class="text-xl text-white font-bold inline-block">CSS</h2></div>
                <textarea id="css-code" class="px-5 box-border w-full min-h-32 bg-secondaryColor bg-opacity-20  h-full text-white"></textarea> 
            </div>
            <div class="w-full relative pt-9" >
                <div class="absolute w-full top-0 left-0 right-0 bg-secondaryColor px-2"> <h2 class="text-xl text-white font-bold inline-block">Javascript</h2></div>
                 <textarea id="js-code" class="px-5 box-border w-full min-h-32 bg-secondaryColor bg-opacity-20  h-full text-white"></textarea> 
             </div>
        </div>
    </div>


    <div class="w-full bg-white grow relative">
        <iframe id="editor-output" class="w-full h-full absolute inset-0"></iframe>
    </div>

</div>

@endsection
