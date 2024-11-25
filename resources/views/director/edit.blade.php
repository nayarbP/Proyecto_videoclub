@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Director</h1>
    <form action="{{ route('director.update', $director->dirId) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="dirNombre">Nombre</label>
            <input type="text" name="dirNombre" id="dirNombre" class="form-control" value="{{ $director->dirNombre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Director</button>
    </form>
</div>
@endsection
