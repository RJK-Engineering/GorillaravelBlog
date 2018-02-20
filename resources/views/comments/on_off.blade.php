<form class="form-inline" action="/posts/{{ $post->id }}/toggleCommentStatus">
    {{ csrf_field() }}
    <button class="btn ml-auto mr-auto mb-3">
        @if ($post->comments_on_off)
            <i class="material-icons">lock_outline</i>
        @else
            <i class="material-icons">lock_open</i>
        @endif
    </button>
</form>
