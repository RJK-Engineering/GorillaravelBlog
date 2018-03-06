
  @foreach ($categories as $category)
    <a href="/{{ $blog->title }}/{{ $category->id }}/posts" class="nav-link category-link">{{ $category->title }}</a>
  @endforeach
