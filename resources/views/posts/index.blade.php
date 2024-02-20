<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cyborg/bootstrap.min.css">
    <style>
        .post-card {
            margin-bottom: 20px;
        }

        /* Hacker Styles */
        body {
            background-color: #000;
            color: #00ff00;
            font-family: 'Courier New', monospace;
        }

        .card {
            background-color: #101010; /* Slightly lighter background for cards */
            border-color: #00ff00; /* Neon green border */
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Todas las Publicaciones</h1>
        </div>

        @if ($posts->isEmpty())
            <div class="col-md-12">
                <p>No hay publicaciones.</p>
            </div>
        @else
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card post-card">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ $post->body }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
<div align="center">
    <a href="/home"><button>Regresar al inicio</button></a>
</div>
</body>
</html>
