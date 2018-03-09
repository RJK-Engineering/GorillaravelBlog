@can('lock_comments')
  <form class="form-inline" action="/{{ $blog->title }}/posts/{{ $post->id }}/toggleCommentStatus" method="POST">
    {{ csrf_field() }}
    @if(Auth::user()->can('lock_comments') && Auth::user()->id == $blog->user_id)
      <button class="btn text-dark ml-auto mr-auto mb-3" style="cursor: pointer">

      @if ($post->comments_on_off)
        <i class="material-icons">lock_outline</i>
      @else
        <i class="material-icons">lock_open</i>
      @endif
    </button>
    @endif
  </form>
@endcan
