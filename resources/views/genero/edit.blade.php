@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Género</h1>
    <form action="{{ route('genero.update', $genero->genId) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="genNombre">Nombre</label>
            <input type="text" class="form-control" id="genNombre" name="genNombre" value="{{ $genero->genNombre }}" required>
        </div>
        <button type="submit" class="btn btn-warning mt-3">Actualizar</button>
    </form>
</div>
@endsection
