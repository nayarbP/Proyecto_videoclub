@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Alquiler</h1>
    <table class="table">
        <tr>
            <th>Socio</th>
            <td>{{ $alquiler->socio->socNombre }}</td>
        </tr>
        <tr>
            <th>Pelicula</th>
            <td>{{ $alquiler->pelicula->pelNombre }}</td>
        </tr>
        <tr>
            <th>Fecha Desde</th>
            <td>{{ $alquiler->alqFechaDesde }}</td>
        </tr>
        <tr>
            <th>Fecha Hasta</th>
            <td>{{ $alquiler->alqFechaHasta }}</td>
        </tr>
        <tr>
            <th>Valor</th>
            <td>{{ $alquiler->alqValor }}</td>
        </tr>
        <tr>
            <th>Fecha de Entrega</th>
            <td>{{ $alquiler->alqFechaEntrega }}</td>
        </tr>
    </table>
    <a href="{{ route('alquiler.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
