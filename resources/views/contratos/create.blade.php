<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Contrato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        body {
            background-color: #000; /* Black background */
            color: #0f0; /*  Bright green text */
            font-family: 'Courier New', monospace; /* Classic terminal font */
        }

        .container {
            max-width: 800px; /* Limit container width */
            margin: 50px auto;  /* Center content */
            padding: 20px;
            background-color: #0a0a0a; /* Slightly darker background for contrast */
            border: 2px solid #0f0; /* Green border */
            box-shadow: 0 0 10px #0f0; /* Subtle green glow */
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #0f0;
            padding: 8px;
            color: white;
        }

        /* Scrolling Effect on Long table text (optional) */
        td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px; /* Adjust as needed */
        }

        .top-right-corner {
            position: absolute;
            top: 10px;
            right: 20px;
        }

        .alert {
            border-color: #0f0;
        }

        form .form-control {
            background-color: #151515;
            border: 1px solid #0f0;
            color: #0f0;
        }

        form label {
            color: #0f0;
        }

        .btn-primary {
            background-color: #0f0;
            border-color: #0f0;
        }

        .btn-primary:hover {
            background-color: #00dd00;
            border-color: #00dd00;
        }

        .btn-secondary {
            color: #0f0;
            background-color: transparent;
            border-color: #0f0;
        }

        .btn-secondary:hover {
            background-color: rgba(15, 15, 15, 0.5);
            border-color: #00dd00;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Crear Nuevo Contrato</h1>

    <a href="{{ route('contratos.index') }}" class="btn btn-secondary mb-3">Regresar</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contratos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ old('ciudad') }}">
        </div>
        <div class="mb-3">
            <label for="pago" class="form-label">Pago</label>
            <input type="number" step="any" class="form-control" id="pago" name="pago" value="{{ old('pago') }}">
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="{{ old('categoria') }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
</body>
</html>
