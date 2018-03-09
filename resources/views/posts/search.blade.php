<form class="mr-3" action="/{{ $blog->title }}/posts/search" method="get">
    <div class="form-group">
      <label class="sr-only" for="search-box">Search this blog</label>
      <input type="hidden" id="blog" name="blog" value="{{ $blog->id }}">
      <input class="form-control" id="search-box" size="16" name="q" type="text" placeholder="Search this blog">
    </div>
</form>
