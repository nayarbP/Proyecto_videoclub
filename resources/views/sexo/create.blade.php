@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Sexo</h1>
    <form action="{{ route('sexo.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="sexNombre">Nombre</label>
            <input type="text" class="form-control" id="sexNombre" name="sexNombre" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Crear</button>
    </form>
</div>
@endsection
