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
        <div class="card-header"><h4>Crear Usuario</h4></div> <!--Titulo-->
        <div class="card-body"></div>
            <a href="{{ route('products.index', $product->id) }}" class="btn btn-info btn-sm mb-3">Atras</a> <!--Boton para volver al apartado principal-->

            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mt-2"> <!--Apartado para ingresar el nuevo usuario del establecimiento-->
                    <label for="">Usuario:</label>
                    <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $product->name }}">
                    @error("name")
                    <span class="text-danger">{{ $message }}</span><!--Mensaje de advertencia-->
                    @enderror
                </div>

                <div class="mt-2"> <!--Apartado donde ingresa la contrasseña del nuevo usuario-->
                    <label for="">Contraseña:</label>
                    <textarea name="password" placeholder="Password" class="form-control">{{ $product->password }}</textarea>
                    @error("password")
                    <span class="text-danger">{{ $message }}</span><!--Mensaje de advertencia-->
                    @enderro
                </div>

                <div class="mt-2"> <!--Boton para guardar nuevo usuario-->
                    <button class="btn btn-success btn-sm" type="sumbit"><i class="fa fa-plus"></i>Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>