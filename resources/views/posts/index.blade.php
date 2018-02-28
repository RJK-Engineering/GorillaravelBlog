@extends ('layouts.blog')

@section('blog_posts')
  @foreach ($posts as $post)
    <article @if ($post->post_thumbnail) class="clearfix" @endif>
      <h2>
        <a href="/posts/{{ $post->id }}">
          {{ $post->title }}
        </a>
      </h2>
      @if ($post->post_thumbnail)
          <img class="float-right mr-3" style="width: 25vw" src="/uploads/{{ $post->post_thumbnail }}">
      @endif
      <p>{!! $post->body !!}</p>
    </article>
  @endforeach
@endsection
