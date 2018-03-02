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
