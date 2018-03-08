@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Welcome to Gorillalaravel Platform </h1>
            <p class="lead">The place to start your own blog.</p>
            <button type="button" class="btn btn-secondary btn-lg" onclick="document.location='blogs/create'">Start your blog now!</button>
        </div>
    </div>
    <div class="list-group mb-5">
        <div class="list-group-item flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48">publish</h1>
                <div class="col">
                    <h5 class="mb-1">Publish Articles</h5>
                    <p class="mb-1">Share what's on your mind with the whole world.</p>
                </div>
            </div>
        </div>
        <div class="list-group-item flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48">comment</h1>
                <div class="col">
                    <h5 class="mb-1">Let users post comments</h5>
                    <p class="mb-1">Are you curious what the rest of the world thinks of your ideas?</p>
                </div>
            </div>
        </div>
        <div class="list-group-item flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48">lock_outline</h1>
                <div class="col">
                    <h5 class="mb-1">Lock the comments</h5>
                    <p class="mb-1">Do you want to stop the discussion? Locking the comments is a breeze.</p>
                </div>
            </div>
        </div>
        <div class="list-group-item flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48">edit</h1>
                <div class="col">
                    <h5 class="mb-1">Edit Articles</h5>
                    <p class="mb-1">Changed your mind? You can easily edit your articles.</p>
                </div>
            </div>
        </div>
        <div class="list-group-item flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48">search</h1>
                <div class="col">
                    <h5 class="mb-1">Search Articles</h5>
                    <p class="mb-1">Readers can easily find interesting articles with the build-in search funcionality.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
