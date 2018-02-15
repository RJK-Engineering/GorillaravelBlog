<form method="post" action="/comment/{{ $post->id }}" class="mb-5">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="sr-only" for="exampleFormControlInput1">Title</label>
        <input required class="form-control" id="exampleFormControlInput1" placeholder="Enter your comment here" name="comment">
    </div>
</form>
