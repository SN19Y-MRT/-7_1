<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
<<<<<<< HEAD
                            <h2 class='title'>
    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
</h2>

=======
                    <h2 class='title'>{{ $post->title }}</h2>
>>>>>>> origin/master
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
<<<<<<< HEAD
        
        [<a href='/posts/create'>create</a>]
        


=======
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
>>>>>>> origin/master
    </body>
</html>