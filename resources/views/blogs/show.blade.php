@extends ('layouts.blog')

@section('blog_subscribe')
  <form action="{{ route('toggleSubscription') }}" method="POST">
    @csrf
    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <button class="btn">
      @if ($blog->subscribed(Auth::user()))
        Unsubscribe
      @else
        Subscribe
      @endif
    </button>
  </form>
@endsection

@section('blog_posts')
  @foreach ($blog->posts() as $post)
    <article @if ($post->post_thumbnail) class="clearfix" @endif>
      <div class="blog-post-title">
        <h2>
          <a href="/{{ $blog->title }}/posts/{{ $post->id }}">
            {{ $post->title }}
          </a>
        </h2>
      </div>
      <div class="blog-post-meta">
        {{ $post->created_at->toFormattedDateString() }}
        by {{ $post->blog()->user()->name }}
      </div>
      <div class="blog-post-body">
        @if ($post->post_thumbnail)
          <img class="float-right mr-3" style="width: 25vw" src="/uploads/{{ $post->post_thumbnail }}">
        @endif
        <p>{!! $post->body !!}</p>
      </div>
    </article>
  @endforeach
@endsection
