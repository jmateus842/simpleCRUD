<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contratos</title>
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

    </style>
</head>
<body>
<div class="top-right-corner">
    @if (Auth::check())
       <h3 class="container">{{ Auth::user()->name }}</h3>
    @endif
</div>

<div class="container">
    <h1>Lista de Contratos</h1>

    <a href="{{ route('contratos.create') }}" class="btn btn-primary mb-3">Nuevo Contrato</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Ciudad</th>
            <th>Pago</th>
            <th>Categoria</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($contratos as $contrato)
            <tr>
                <td>{{ $contrato->id }}</td>
                <td>{{ $contrato->ciudad }}</td>
                <td>{{ $contrato->pago }}</td>
                <td>{{ $contrato->categoria }}</td>
                <td>
                    <form action="{{ route('contratos.destroy', $contrato) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Confirma la eliminación?')">Tomar Contrato</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">No hay contratos disponibles.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
<div>
    <a href="/home" class="btn btn-primary mb-3">Regresar</a>
</div>
</body>
</html>
