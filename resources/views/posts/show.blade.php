@extends ('blog')

@section('blog_posts')
    <article>
      <h2>{{ $post->title }}</h2>
      @if ($post->post_thumbnail)
          <img class="float-right mr-3" style="width: 25vw" src="/uploads/{{ $post->post_thumbnail }}">
      @endif
      <p>{{ $post->body }}</p>
    </article>
    @include('comments.show')
    @include('comments.on_off')
    @if ($post->comments_on_off)
        @include('comments.create')
    @endif
@endsection
