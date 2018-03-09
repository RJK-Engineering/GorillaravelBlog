@extends('layouts.app')
@section('content')
    <div class="error">
        @include('flash::message')
    </div>
    <h1 class="text-center display-3 py-5">Gorillalaravel Blog Platform</h1>
    <div class="jumbotron text-center rounded-0">
        <h2 class="display-4 font-weight-light pb-3">Start your own blog now</h2>
        <a href="/welcome" class="button btn-secondary btn-lg">Learn more</a>
    </div>
    <h2 class="text-center font-weight-light py-4">Discover the latest content from out blogs</h2>
    <div class="row">
        @foreach ($posts as $index => $post)
            <div class="card p-0 rounded-0 col-sm-12 col-md-6 col-lg-3 mb-2">
            @if ($post->post_thumbnail)
                <a href="/{{ $blogs[$index]->name }}/posts/{{ $post->id }}">
                    <img class="card-img-top" src="/uploads/{{ $post->post_thumbnail }}" alt="Card image cap">
                </a>
            @endif
              <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text" style="height: 10rem; overflow:hidden;">{{ $post->body }}</p>
              <a href="/{{ $blogs[$index]->name }}/posts/{{ $post->id }}" class="btn btn-secondary">Read more</a>
            </div>
          </div>
        @endforeach
    </div>
    <h2 class="text-center font-weight-light py-4">Meet our bloggers</h2>
    <div class="card p-0 rounded-0 col-sm-12 col-md-6 col-lg-3 mb-2">
        <img class="card-img-top" src="https://pbs.twimg.com/profile_images/466943815962476545/tHGnzXka_400x400.png" alt="Card image cap">
      <div class="card-body">
      <h5 class="card-title">Ernie</h5>
      <p class="card-text" style="height: 10rem; overflow:hidden;">Tellus pellentesque eu tincidunt tortor aliquam. Est pellentesque elit ullamcorper dignissim. Risus viverra adipiscing at in tellus integer feugiat scelerisque varius. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. Eget nunc scelerisque viverra mauris in aliquam sem fringilla ut. Mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Sodales ut eu sem integer vitae justo eget magna. Congue nisi vitae suscipit tellus. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis.</p>
      <a href="/Chrrr/posts" class="btn btn-secondary">Visit the blog</a>
    </div>
  </div>

@endsection
