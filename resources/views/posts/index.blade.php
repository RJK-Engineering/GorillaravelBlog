@extends ('blog')


@section('blog_posts')
  @foreach ($posts as $post)
    <article>
      <h2>
          <a href="/post/{{ $post->id }}">
              {{ $post->title }}
          </a>
      </h2>
      <p>{{ $post->body }}</p>
    </article>
  @endforeach
@endsection
