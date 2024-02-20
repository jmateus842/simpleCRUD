<!DOCTYPE html>
<html>
<head>
    <title>My Posts</title>
    <style>
        /* Your existing 'Hacker Styles' here */
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
            <table>
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
