<form action="{{ route('comments.store') }}" method="POST">
    @csrf
    <input type="hidden" name="content_id" value="{{ $content->id }}">
    <label for="author">اسمك:</label>
    <input type="text" id="author" name="author" required>
    <label for="comment">تعليقك:</label>
    <textarea id="comment" name="comment" required></textarea>
    <button type="submit">إرسال</button>
</form>
