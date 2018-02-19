<form method="post" action="/comment/{{ $post->id }}" class="mb-5 ml-auto mr-auto">
    {{ csrf_field() }}
    <div class="form-group pl-5">
        <label class="sr-only" for="comment-input">Enter comment</label>
        <input required class="form-control" id="comment-input" placeholder="Enter your comment here" name="comment">
    </div>
</form>
