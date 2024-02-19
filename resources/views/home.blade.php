@extends('layouts.app')
@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    @auth
        <div class="container d-flex justify-content-center">
        <p>You are logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>LOG OUT</button>
        </form>
        </div>
        <div class="container d-flex justify-content-center">
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
        </div>
        @else
        <div class="container d-flex justify-content-center">
            <form action="/register" method="POST">
                @csrf
            <div class="form-group">
                <h2>Register</h2>
                <label> Name
                <input class="form-control" name="name" type="text" placeholder="name">
                </label>
            </div>
                <div class="form-group">
                    <label> Email
                    <input class="form-control" name="email" type="email" placeholder="email">
                    </label>
                </div>

                <div class="form-group">
                    <label>Password
                    <input class="form-control" name="password" type="password" placeholder="password">
                    </label>
                </div>
                    <input type="submit" class="btn btn-primary" value="Registro">

            </form>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="/login" method="POST">
                @csrf

                <div class="form-group">
                    <label>Name
                <input class="form-control" name="loginname" type="text" placeholder="name">
                    </label>
                </div>
                <div class="form-group">
                    <label>Password
                    <input class="form-control" name="loginpassword" type="password" placeholder="password">
                    </label>
                </div>
                <input type="button" value="Login" class="btn btn-primary">
            </form>

        </div>
    @endauth
    </body>
    </html>
@endsection
