<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Propiedad</title>
    <!-- Enlaces a tus archivos CSS y JavaScript aquí -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Añadir Propiedad</h1>
        <form action="{{ route('propiedades.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="local_comercial">Local Comercial</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tamaño">Tamaño:</label>
                <input type="text" class="form-control" id="tamaño" name="tamaño" required>
            </div>
            <div class="form-group">
                <label for="numero_habitaciones">Número de Habitaciones:</label>
                <input type="number" class="form-control" id="numero_habitaciones" name="numero_habitaciones" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select class="form-control" id="estado" name="estado" required>
                    <option value="disponible">Disponible</option>
                    <option value="vendida">Vendida</option>
                    <option value="arrendada">Arrendada</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Añadir Propiedad</button>
            <a href="{{ route('propiedades.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>