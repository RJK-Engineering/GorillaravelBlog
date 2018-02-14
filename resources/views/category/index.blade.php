@extends ('blog')

@section('blog_posts')
  @foreach ($categories as $category)
    <div>{{ $category->title }}</div>
  @endforeach
@endsection
