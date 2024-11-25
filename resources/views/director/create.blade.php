@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Director</h1>
    <form action="{{ route('director.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="dirNombre">Nombre</label>
            <input type="text" name="dirNombre" id="dirNombre" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Crear Director</button>
    </form>
</div>
@endsection
