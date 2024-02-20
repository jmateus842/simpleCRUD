<!DOCTYPE html>
<html>
<head>
    <title>My Posts</title>
    <style>
        /* Hacker Styles */
        body {
            background-color: #000; /* Black background */
            color: #00ff00; /* Neon green text */
            font-family: 'Courier New', monospace; /* Classic terminal font */
        }
        container {
            background-color: #000; /* Black background */
            color: #00ff00; /* Neon green text */
            font-family: 'Courier New', monospace; /* Classic terminal font */
        }

        h1, h2 {
            color: #00ff00; /* Heading text in neon green */
        }
    </style>
</head>

<body>
<div class="container">
    <h1>My posts</h1>
    @auth
        <div>
                <a href="{{ route('home') }}"><button>Ver las Publicaciones</button></a>
        </div>
        @if ($posts->count())
            @foreach ($posts as $post)
                <div>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->body }}</p>
                </div>
            @endforeach
        @else
            <p>You haven't created any posts yet.</p>
        @endif
    @else
        <p>Please log in to view your posts.</p>
    @endauth
</div>
<div>
    @auth
        <a href="{{ route('home') }}"><button>Ver las Publicaciones</button></a>
    @else
        <a href="{{ route('home') }}"><button>Ver las Publicaciones</button></a>
    @endauth
</div>
</body>
</html>
