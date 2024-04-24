<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Propiedades</title>
</head>

<body>
    <div class="container">
        <h1 class="mb-4">Listado de Propiedades</h1>
        <div class="mb-3">
            <a href="{{ route('propiedades.create') }}" class="btn btn-success btn-sm">Agregar Propiedad</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Tamaño</th>
                        <th scope="col">Número de Habitaciones</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($propiedades as $propiedad)
                        <tr>
                            <td>{{ $propiedad->id }}</td>
                            <td>{{ $propiedad->direccion }}</td>
                            <td>{{ $propiedad->tipo }}</td>
                            <td>{{ $propiedad->tamaño }}</td>
                            <td>{{ $propiedad->numero_habitaciones }}</td>
                            <td>{{ $propiedad->precio }}</td>
                            <td>{{ $propiedad->estado }}</td>
                            <td>
                                <a href="{{ route('propiedades.edit', ['propiedad' => $propiedad->id]) }}"
                                    class="btn btn-info btn-sm">Editar</a>

                                <form action="{{ route('propiedades.destroy', ['propiedad' => $propiedad->id]) }}"
                                    method="POST" style="display: inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Estás seguro de que deseas eliminar esta propiedad? Esta acción no se puede deshacer.')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-mrcSNrVJ4FdQl3elR5NvxPPKOVy3aDkz5e



