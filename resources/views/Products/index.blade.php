<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-title">Listado de productos</h3>
                    <a href="{{route('products.create')}}" class="btn btn-success btn-sm">Nuevo producto</a>
                </div>
                <div class="card-body">
                    @if(session('Informacion'))
                        <div class="alert alert-info">{{ session('Informacion') }}</div>
                    @endif

                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Product as $product)
                            <tr>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>