<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cyborg/bootstrap.min.css">
    <style>
        /* Include basic styling or hacker theme CSS here */
    </style>
</head>
<body>
<div class="container">
    <h1>Delete Post</h1>

    @auth
        <form action="/delete-post" method="POST">
            @csrf
            @method('DELETE')

            <div class="form-group">
                <label for="title">Post Title:</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <button type="submit" class="btn btn-danger">Delete Post</button>
        </form>

    @else
        <p>Please log in to delete posts.</p>
    @endauth
</div>
<div align="center">
    <a href="/home"><button>Regresar al inicio</button></a>
</div>
</body>
</html>
