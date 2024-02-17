@extends('layouts.app')
@section('content')
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    @auth
        <p>You are logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>LOG OUT</button>
        </form>
        <div>
            <h2>Crear Nueva Queja</h2>
            <form action="/create-post" method="POST">
                @csrf

                <div class="container">  <div class="row">
                        <div class="col-md-6 offset-md-3"> <div class="form-group mb-3">
                                <label for="title" class="form-label">Post Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title">
                            </div>

                            <div class="form-group mb-3">
                                <label for="body" class="form-label">Body Content</label>
                                <textarea class="form-control" id="body" name="body" rows="5" placeholder="Enter body content..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar Documento</button>
                        </div>
                    </div>
                </div>
            </form>
        @else
        <div style="border: 3px solid black;">
            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input name="name" type="text" placeholder="name">
                <input name="email" type="text" placeholder="email">
                <input name="password" type="password" placeholder="password">
                <button>register</button>
            </form>
        </div>
        <div style="border: 3px solid black;">
            <h2>Login</h2>
            <form action="/login" method="POST">
                @csrf
                <input name="loginname" type="text" placeholder="name">
                <input name="loginpassword" type="password" placeholder="password">
                <button>login</button>
            </form>
        </div>
    @endauth
    </body>
    </html>
@endsection




