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
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Propiedades') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="mb-3">
            <a href="{{ route('propiedades.create') }}" class="btn btn-success btn-sm">Agregar Propiedad</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                        <thead>
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
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Editar </a></li>


                                            <form action="{{ route('propiedades.destroy', ['propiedad' => $propiedad->id]) }}"
                                    method="POST" style="display: inline-block">
                                    @method('DELETE')
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


