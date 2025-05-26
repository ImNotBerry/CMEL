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
        <div class="card-header"><h4>Ver Usuario</h4></div><!--Titulo-->
        <div class="card-body"></div>
            <a href="{{ route('products.index', $product->id) }}" class="btn btn-info btn-sm mb-3"><i class="fa fa-arrow-left"></i>Atras</a> <!--Boton Volver-->

            <div class="mt-4">
                <p><strong>Name:</strong> {{ $product->name }}</p>
                <p><strong>Password:</strong> {{ $product->password }}</p>
            </div>
        </div>
    </div>
</div>
</body>