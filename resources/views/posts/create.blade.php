@extends('master')

@section('content')
    <h1 class="mt-5 mb-4">New blog post</h1>

    <form method="post" enctype="multipart/form-data" action="/posts" class="mb-5" >

        {{ csrf_field() }}

        @include('errors')
        <div class="form-group">
            <label for="categoriesSelector">Select a category. Select multiple categories by holding the ctrl key and clicking.</label>
            <select class="form-control" id="categoriesSelector" name="category[]" multiple>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input class="form-control" id="exampleFormControlInput1" placeholder="Enter the title here" name="title">
        </div>
        <div class="form-group">
            <label for="text-area">Write your blog post here</label>
            <textarea class="form-control" id="text-area" rows="10" placeholder="Enter the blogpost here" name="body"></textarea>
        </div>
        <div class="form-group">
			<label for="post_thumbnail">Add an image</label> <br/>
			<input class="form-control-file" type="file" name="post_thumbnail" id="post_thumbnail" />
		</div>
        <hr>


        <input type="submit" value="Submit blog post" class="btn"></input>

    </form>


@endsection
