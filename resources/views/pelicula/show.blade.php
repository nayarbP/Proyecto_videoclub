@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Película</h1>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <td>{{ $pelicula->pelNombre }}</td>
        </tr>
        <tr>
            <th>Fecha de Estreno</th>
            <td>{{ $pelicula->pelFechaEstreno }}</td>
        </tr>
        <tr>
            <th>Costo</th>
            <td>{{ $pelicula->pelCosto }}</td>
        </tr>
        <tr>
            <th>Género</th>
            <td>{{ $pelicula->genero->genNombre }}</td>
        </tr>
        <tr>
            <th>Director</th>
            <td>{{ $pelicula->director->dirNombre }}</td>
        </tr>
        <tr>
            <th>Formato</th>
            <td>{{ $pelicula->formato->forNombre }}</td>
        </tr>
    </table>
    <a href="{{ route('pelicula.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
