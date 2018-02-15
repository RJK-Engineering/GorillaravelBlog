
  @foreach ($categories as $category)
    <a href="/category/{{ $category->id }}/posts" class="nav-link">{{ $category->title }}</a>
  @endforeach
