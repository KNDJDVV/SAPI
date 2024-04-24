<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Propiedad</title>
    <!-- Librerías de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Editar Propiedad</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ route('propiedades.update', ['propiedad' => $propiedad->id]) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $propiedad->direccion }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <div class="input-group">
                            <select class="form-select" id="tipo" name="tipo" required>
                                <option value="" disabled selected>Selecciona el tipo</option>
                                <option value="casa" {{ $propiedad->tipo == 'casa' ? 'selected' : '' }}>Casa</option>
                                <option value="apartamento" {{ $propiedad->tipo == 'apartamento' ? 'selected' : '' }}>Apartamento</option>
                                <option value="local_comercial" {{ $propiedad->tipo == 'local_comercial' ? 'selected' : '' }}>Local Comercial</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tamaño" class="form-label">Tamaño</label>
                        <input type="text" class="form-control" id="tamaño" name="tamaño" value="{{ $propiedad->tamaño }}" required>
                        
                    </div>
                    <div class="mb-3">
                        <label for="numero_habitaciones" class="form-label">Número de Habitaciones</label>
                        <input type="number" class="form-control" id="numero_habitaciones" name="numero_habitaciones" value="{{ $propiedad->numero_habitaciones }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" id="precio" name="precio" value="{{ number_format($propiedad->precio, 2, '.', ',') }}" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="disponible" {{ $propiedad->estado == 'disponible' ? 'selected' : '' }}>Disponible</option>
                            <option value="vendida" {{ $propiedad->estado == 'vendida' ? 'selected' : '' }}>Vendida</option>
                            <option value="arrendada" {{ $propiedad->estado == 'arrendada' ? 'selected' : '' }}>Arrendada</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <a href="{{ route('propiedades.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Librerías de Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
