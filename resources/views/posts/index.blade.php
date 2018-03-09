@extends ('layouts.blog')

@section('blog_posts')
    @include('layouts.errors')
    @if($posts->count() == 1)
        @include('posts.show', ['post' => $posts[0], 'comments' => $posts[0]->comments()->get()])
    @elseif ($posts->count() == 0)
        <h2 class="lead text-center">There are no posts to display.</h2>
    @else
    <div class="row">
        @foreach ($posts as $index => $post)
            <div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 p-0 rounded-0">
            @if ($post->post_thumbnail)
                <a href="/{{ $blog->title }}/posts/{{ $post->id }}">
                    <img class="card-img-top rounded-0" src="/uploads/{{ $post->post_thumbnail }}" alt="Card image cap">
                </a>
            @endif
                <div class="card-body">
                    <h5 class="card-title"> {{ $post->title }}</h5>
                    <p class="card-text" style="height: 10rem; overflow:hidden;">{{ $post->body }}</p>
                    <a href="/{{ $blog->title }}/posts/{{ $post->id }}" class="btn btn-outline-dark">Read more</a>
                </div>
          </div>
        @endforeach
    @endif
    </div>
@endsection
