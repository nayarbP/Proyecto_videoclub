@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Alquiler</h1>
    <form action="{{ route('alquiler.update', $alquiler->alqId) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="socId">Socio</label>
            <select name="socId" id="socId" class="form-control" required>
                @foreach ($socios as $socio)
                <option value="{{ $socio->socId }}" {{ $alquiler->socId == $socio->socId ? 'selected' : '' }}>{{ $socio->socNombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="pelId">Pelicula</label>
            <select name="pelId" id="pelId" class="form-control" required>
                @foreach ($peliculas as $pelicula)
                <option value="{{ $pelicula->pelId }}" {{ $alquiler->pelId == $pelicula->pelId ? 'selected' : '' }}>{{ $pelicula->pelNombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="alqFechaDesde">Fecha Desde</label>
            <input type="date" name="alqFechaDesde" id="alqFechaDesde" class="form-control" value="{{ $alquiler->alqFechaDesde }}" required>
        </div>
        <div class="form-group">
            <label for="alqFechaHasta">Fecha Hasta</label>
            <input type="date" name="alqFechaHasta" id="alqFechaHasta" class="form-control" value="{{ $alquiler->alqFechaHasta }}" required>
        </div>
        <div class="form-group">
            <label for="alqValor">Valor</label>
            <input type="number" name="alqValor" id="alqValor" class="form-control" value="{{ $alquiler->alqValor }}" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="alqFechaEntrega">Fecha de Entrega</label>
            <input type="date" name="alqFechaEntrega" id="alqFechaEntrega" class="form-control" value="{{ $alquiler->alqFechaEntrega }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Alquiler</button>
    </form>
</div>
@endsection
