@extends ('layouts.blog')

@section('blog_posts')
    @include('layouts.errors')
    <article>
      <h1>
          @if(Auth::user())
             @if(Auth::user()->can('edit_posts') && Auth::user()->id == $blog->user_id)
                <a class="material-icons" href="/{{ $blog->name }}/posts/{{ $post->id }}/edit">edit</a>
            @endif
          @endif
          {{ $post->title }}
      </h1>
      @if ($post->post_thumbnail)
          <img class="float-right mr-3" style="width: 25vw" src="/uploads/{{ $post->post_thumbnail }}">
      @endif
      <p>{!! $post->body !!}</p>
    </article>
    @include('comments.show')
    @guest
        <a href="/login" class="btn btn-block btn-lg border-info my-4">Login or register to post a comment</a>
    @else
        @include('comments.on_off')
        @if ($post->comments_on_off)
            @include('comments.create')
        @endif
    @endguest
@endsection
