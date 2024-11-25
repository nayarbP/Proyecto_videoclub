@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Pelicula</h1>
    <form action="{{ route('pelicula.update', $pelicula->pelId) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pelNombre">Nombre</label>
            <input type="text" name="pelNombre" id="pelNombre" class="form-control" value="{{ $pelicula->pelNombre }}" required>
        </div>
        <div class="form-group">
            <label for="pelFechaEstreno">Fecha de Estreno</label>
            <input type="date" name="pelFechaEstreno" id="pelFechaEstreno" class="form-control" value="{{ $pelicula->pelFechaEstreno }}" required>
        </div>
        <div class="form-group">
            <label for="pelPrecio">Precio</label>
            <input type="number" name="pelPrecio" id="pelPrecio" class="form-control" value="{{ $pelicula->pelPrecio }}" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Pelicula</button>
    </form>
</div>
@endsection
