@extends ('blog')

@section('blog_posts')
<article>
  <h2>{{ $post->title }}</h2>
  <p>{{ $post->body }}</p>
</article>
@endsection
