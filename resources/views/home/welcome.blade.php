@extends('layouts.app')
@section('content')
    <div class="jumbotron rounded-0 mb-0">
        <div class="container">
            <a class="text-dark" href="/">
              <h1 class="display-4">Gorillaravel Blog Platform </h1>
            </a>
            <p class="lead">The place to start your own blog.</p>
            <button type="button" class="btn btn-secondary btn-lg mt-4" onclick="document.location='blogs/create'">Register now!</button>
        </div>
    </div>
    <div class="list-group mb-5">
        <div class="list-group-item rounded-0 flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48 m-0">screen_share</h1>
                <div class="col">
                    <h5 class="mb-1">Start your own blog</h5>
                    <p class="mb-1">We make it easy to get started now.</p>
                </div>
            </div>
        </div>
        <div class="list-group-item flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48 m-0">publish</h1>
                <div class="col">
                    <h5 class="mb-1">Publish Articles</h5>
                    <p class="mb-1">Share what's on your mind with the whole world.</p>
                </div>
            </div>
        </div>
        <div class="list-group-item flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48 m-0">comment</h1>
                <div class="col">
                    <h5 class="mb-1">Let others post comments</h5>
                    <p class="mb-1">Are you curious what the rest of the world thinks of your ideas?</p>
                </div>
            </div>
        </div>
        <div class="list-group-item flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48 m-0">lock_outline</h1>
                <div class="col">
                    <h5 class="mb-1">Lock the comments</h5>
                    <p class="mb-1">Do you want to stop the discussion? Locking the comments is a breeze.</p>
                </div>
            </div>
        </div>
        <div class="list-group-item flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48 m-0">edit</h1>
                <div class="col">
                    <h5 class="mb-1">Edit Articles</h5>
                    <p class="mb-1">Changed your mind? You can easily edit your articles.</p>
                </div>
            </div>
        </div>
        <div class="list-group-item flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48 m-0">search</h1>
                <div class="col">
                    <h5 class="mb-1">Search Articles</h5>
                    <p class="mb-1">Readers can easily find interesting articles with the build-in search funcionality.</p>
                </div>
            </div>
        </div>
        <div class="list-group-item flex-column align-items-start">
            <div class="row">
                <h1 class="col-auto material-icons md-48 m-0">check_circle</h1>
                <div class="col">
                    <h5 class="mb-1">Subscribe to a blog</h5>
                    <p class="mb-1">Make sure you don't miss the latest post of your favorite blogger.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
