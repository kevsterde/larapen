@if ($editor && Auth::user())
    @if (Auth::user()->checkLove($editor->code_id))
        <form action="{{ route('editor.unlove', ['editor' => $editor->code_id]) }}" method="POST">
            @csrf
            <button class=" px-4 bg-primaryColor text-white mt-2 text-sm">Unlove</button>
        </form>
    @else
        <form action="{{ route('editor.love', ['editor' => $editor->code_id]) }}" method="POST">
            @csrf
            <button class=" px-4 bg-primaryColor text-white mt-2 text-sm">Love</button>
        </form>
    @endif
@endif
