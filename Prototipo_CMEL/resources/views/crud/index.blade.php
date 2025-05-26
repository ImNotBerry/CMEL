<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@05.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="card mt-5">
        <div class="card-header"><h4>Base de Usuario</h4></div><!--Titulo-->
        <div class="card-body"></div>
            <a href="{{ route('products.create') }}" class="btn btn-success btn-sm mb-3">Crear Usuario</a>
            <table class="table table-striped table-striped">
                <thead>
                    <tr>
                        <th width="30px">ID</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->password }}</td>
                        <td><!--Botones y Ruta de estos-->
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="" class="btn btn-primary btn-sm">Ver</a>
                                <a href="" class="btn btn-primary btn-sm">Editar</a>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>