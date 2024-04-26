
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lista</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transacciones') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('Transacciones.create') }}"
                        class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ml-2">Añadir</a>
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
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Editar </a></li>


                                            <form action="{{ route('Transacciones.destroy',['transaccion' =>$transaccion->id]) }}";
                                            method='POST' style="display: inline-block">
                                            @method('delete')
                                            @csrf
                                            <input
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2"
                                                type="submit" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


