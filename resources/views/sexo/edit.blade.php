@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Sexo</h1>
    <form action="{{ route('sexo.update', $sexo->sexId) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="sexNombre">Nombre</label>
            <input type="text" class="form-control" id="sexNombre" name="sexNombre" value="{{ $sexo->sexNombre }}" required>
        </div>
        <button type="submit" class="btn btn-warning mt-3">Actualizar</button>
    </form>
</div>
@endsection
