<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Añadir Transaccion</title>
  </head>
  <body>
    <h1>Añadir Transaccion</h1>
    <form method="POST" action="{{ route('Transacciones.store') }}">
        @csrf
  <div class="mb-3">
    <label for="id" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
    <div id="idHelp" class="form-text">Codigo</div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Propiedad</label>
    <input type="text" required class="form-control" id="name" aria-describedby="nameHelp"
    name="propiedad" placeholder="propiedad">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Cliente</label>
    <input type="text" required class="form-control" id="apellido" aria-describedby="apellidoHelp"
    name="cliente" placeholder="cliente">
  </div>
  <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="comprador">Comprador</option>
                    <option value="vendedor">Vendedor</option>
                    <option value="arrendatario">Arrendatario</option>
                </select>
            </div>
  <div class="mb-3">
    <label for="name" class="form-label">Fecha</label>
    <input type="text" required class="form-control" id="email" aria-describedby="emailHelp"
    name="fecha" placeholder="Fecha">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Monto</label>
    <input type="text" required class="form-control" id="email" aria-describedby="emailHelp"
    name="monto" placeholder="Monto">
  </div>
  
  </div>
  <div class="mt-3">
  <div class="mt-3">
  <button type="submit" class="btn btn-primary">Save</button>
  <a href="{{ route('Transacciones.index') }}" class="btn btn-warning">Cancel</a>
</div>
</form>
</div>


  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>