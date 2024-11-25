@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Alquileres</h1>
    <a href="{{ route('alquiler.create') }}" class="btn btn-primary">Nuevo Alquiler</a>
    <table class="table">
        <thead>
            <tr>
                <th>Socio</th>
                <th>Pelicula</th>
                <th>Fecha Desde</th>
                <th>Fecha Hasta</th>
                <th>Valor</th>
                <th>Fecha de Entrega</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alquileres as $alquiler)
            <tr>
                <td>{{ $alquiler->socio->socNombre }}</td>
                <td>{{ $alquiler->pelicula->pelNombre }}</td>
                <td>{{ $alquiler->alqFechaDesde }}</td>
                <td>{{ $alquiler->alqFechaHasta }}</td>
                <td>{{ $alquiler->alqValor }}</td>
                <td>{{ $alquiler->alqFechaEntrega }}</td>
                <td>
                    <a href="{{ route('alquiler.edit', $alquiler->alqId) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('alquiler.destroy', $alquiler->alqId) }}" method="POST" style="display:inline;">
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
