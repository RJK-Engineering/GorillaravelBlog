@extends ('blog')


@section('blog_posts')
  @foreach ($posts as $post)
    <article>
      <h2>{{ $post->title }}</h2>
      <p>{{ $post->body }}</p>
    </article>
  @endforeach
@endsection
