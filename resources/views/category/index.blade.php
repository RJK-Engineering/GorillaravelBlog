
  @foreach ($categories as $category)
    <a href="/categories/{{ $category->id }}/posts" class="nav-link category-link">{{ $category->title }}</a>
  @endforeach
