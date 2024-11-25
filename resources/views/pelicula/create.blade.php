@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Pelicula</h1>
    <form action="{{ route('pelicula.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pelNombre">Nombre</label>
            <input type="text" name="pelNombre" id="pelNombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pelFechaEstreno">Fecha de Estreno</label>
            <input type="date" name="pelFechaEstreno" id="pelFechaEstreno" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pelPrecio">Precio</label>
            <input type="number" name="pelPrecio" id="pelPrecio" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-success">Crear Pelicula</button>
    </form>
</div>
@endsection
