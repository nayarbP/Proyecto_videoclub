@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Formato</h1>
    <form action="{{ route('formato.update', $formato->forId) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="forNombre">Nombre</label>
            <input type="text" name="forNombre" id="forNombre" class="form-control" value="{{ $formato->forNombre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Formato</button>
    </form>
</div>
@endsection
