@extends ('layouts.blog')

@section('blog_posts')
    <article>
      <h2>
          {{ $post->title }}
          <a class="material-icons" href="/posts/{{ $post->id }}/edit">edit</a>
      </h2>
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
