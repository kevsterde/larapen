{{--
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
@endif --}}
@if ($editor)
    <form action="{{ route('editor.love', ['editor' => $editor->code_id]) }}" method="POST">
        @csrf
        <button class=" px-4 bg-primaryColor text-white mt-2 text-sm">Love</button>
    </form>
@endif
