<form action="/posts/search" method="post">

    {{ csrf_field() }}

    <div class="form-group">
      <label class="sr-only" for="search-box" >Search</label>
      <input class="form-control" id="search-box" name="q" type="text" value="Search the blog" >
    </div>
</form>
