<form action="/posts/search" method="post">

    {{ csrf_field() }}

    <div class="form-group">
      <label class="sr-only" for="search-box">Search posts</label>
      <input class="form-control" id="search-box" name="q" type="text" placeholder="Search posts">
    </div>
</form>
