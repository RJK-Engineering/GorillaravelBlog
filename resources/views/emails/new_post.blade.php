<!DOCTYPE html>
<html>
<head>
    <title>Welcome to GorillaravelBlog</title>
</head>
<body>
    <h1>New Post</h1>
    <p>
        <a href="{{ config()->get('app.url') . '/' . $post->title }}">Read it!</a>
    </p>

</body>
</html>
