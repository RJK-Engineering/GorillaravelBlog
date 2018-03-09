@extends ('layouts.app')

@section('content')
  <h1>Most recent articles</h1>
  @foreach ($posts as $post)
    <article @if ($post->post_thumbnail) class="clearfix" @endif>
      <h2>
        <a href="/posts/{{ $post->id }}">
          {{ $post->title }}
        </a>
      </h2>
      <div class="blog-post-meta">
        {{ $post->created_at->toFormattedDateString() }}
        by {{ $post->blog()->user()->name }}
      </div>
      @if ($post->post_thumbnail)
          <img class="float-right mr-3" style="width: 25vw" src="/uploads/{{ $post->post_thumbnail }}">
      @endif
      <p>{!! $post->body !!}</p>
    </article>
  @endforeach
@endsection
