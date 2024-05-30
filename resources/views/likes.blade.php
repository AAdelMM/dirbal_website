<form action="{{ route('likes.store') }}" method="POST">
    @csrf
    <input type="hidden" name="content_id" value="{{ $content->id }}">
    <button type="submit">إعجاب</button>
</form>
