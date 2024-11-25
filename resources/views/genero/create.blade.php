@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Género</h1>
    <form action="{{ route('genero.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="genNombre">Nombre</label>
            <input type="text" class="form-control" id="genNombre" name="genNombre" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Crear</button>
    </form>
</div>
@endsection
