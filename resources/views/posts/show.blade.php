@extends ('blog')

@section('blog_posts')
    <article>
      <h2>{{ $post->title }}</h2>
      <p>{{ $post->body }}</p>
    </article>
    @include('comments.show')
    @include('comments.on_off')
    @if ($post->comments_on_off)
        @include('comments.create')
    @endif
@endsection
