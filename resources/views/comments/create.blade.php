<form method="post" action="/comments" class="mb-5 ml-auto mr-auto">
    {{ csrf_field() }}
    <div class="form-group pl-5">
        <label class="sr-only" for="comment-input">Enter comment</label>
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <input class="form-control" id="comment-input" placeholder="Enter your comment here" name="comment" required>
    </div>
</form>
