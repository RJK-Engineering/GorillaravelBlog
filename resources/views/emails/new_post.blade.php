<!DOCTYPE html>
<html>
<head>
    <title>Welcome to GorillaravelBlog</title>
</head>
<body>
    <h1>New Post</h1>
    <p>
        <a href="{{ config()->get('app.url') . '/posts/' . $post->id }}">Read now!</a>
    </p>

</body>
</html>
