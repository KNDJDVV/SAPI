<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Transacciones</title>
  </head>
  <body>
    <h1>Listado de Transacciones</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  <body>
    <div class="container">
        <h1>Lista de Transacciones</h1>
        <a href="{{ route('Transacciones.create')}}" class= "btn btn-sucess">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Propiedad</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Tipo de transaccion</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transacciones as $transaccion)
                <tr>
                    <th scope="row">{{$transaccion->id}}</th>
                    <td>{{ $transaccion->direccion }}</td>
                    <td>{{ $transaccion->nombre }}</td>
                    <td>{{ $transaccion->tipo_transaccion }}</td>
                    <td>{{ $transaccion->fecha_transaccion }}</td>
                    <td>{{ $transaccion->monto_transaccion }}</td>
                    <td>
                  
                    <a href="{{route('Transacciones.edit',['transaccion'=>$transaccion->id]) }}"
                      class="btn btn-info">Editar</a></li>
</form>
                      
                      
                
</form>
                    </td>
                </tr>
                @endforeach
            </tbody>
</table>
  </body>
</html>
