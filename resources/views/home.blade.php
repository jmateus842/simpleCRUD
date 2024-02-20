 <html>
 <head>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cyborg/bootstrap.min.css" integrity="sha384-nEnU7Ae+3lD52AK+RGNzgieBWMnEfgTbRHIwEvp1XXPdqdO6uLTd/NwXbzboqjc2" crossorigin="anonymous">
     <link rel="stylesheet" href="/css/app.css">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>

     <style>
         body {
             background-color: #000; /* Black background */
             color: #00ff00; /* Neon green text */
             font-family: 'Courier New', monospace; /* Classic terminal font */
         }

         form {
             border: 2px solid #00ff00; /* Green border */
             padding: 20px;
         }

         input[type="text"], input[type="password"], textarea {
             background-color: #000;
             color: #00ff00;
             border: 1px solid #00ff00;
         }

         button {
             background-color: #00ff00;
             color: #000;
             border: none;
             padding: 8px 15px;
             cursor: pointer;
         }
     </style>
 </head>
    <body>
    @auth
        <p>You are logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>LOG OUT</button>
        </form>
        <div>
            <h2>Crear Nueva Publicacion</h2>
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
            <div><a href="{{ route('posts.index') }}"><button>Ver todas las Publicaciones</button></a></div>
            <div>@auth
                    <a href="{{ route('posts.deletepage') }}"><button class="btn btn-danger">Eliminar una publicacion</button></a>
                @endauth
            </div>
            <div>
                <a href="{{ route('contratos.index') }}" class="btn btn-primary">
                    Ver Contratos
                </a>
            </div>
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





