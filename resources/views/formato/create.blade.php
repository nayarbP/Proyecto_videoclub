@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Formato</h1>
    <form action="{{ route('formato.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="forNombre">Nombre</label>
            <input type="text" name="forNombre" id="forNombre" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Crear Formato</button>
    </form>
</div>
@endsection
