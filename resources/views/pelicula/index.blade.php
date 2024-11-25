@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Peliculas</h1>
    <a href="{{ route('pelicula.create') }}" class="btn btn-primary">Nueva Pelicula</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha de Estreno</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peliculas as $pelicula)
            <tr>
                <td>{{ $pelicula->pelNombre }}</td>
                <td>{{ $pelicula->pelFechaEstreno }}</td>
                <td>{{ $pelicula->pelPrecio }}</td>
                <td>
                    <a href="{{ route('pelicula.edit', $pelicula->pelId) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('pelicula.destroy', $pelicula->pelId) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
