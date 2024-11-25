@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Socio</h1>
    <form action="{{ route('socio.update', $socio->socId) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="socCedula">Cédula</label>
            <input type="text" class="form-control" id="socCedula" name="socCedula" value="{{ $socio->socCedula }}" required>
        </div>
        <div class="form-group">
            <label for="socNombre">Nombre</label>
            <input type="text" class="form-control" id="socNombre" name="socNombre" value="{{ $socio->socNombre }}" required>
        </div>
        <div class="form-group">
            <label for="socDireccion">Dirección</label>
            <input type="text" class="form-control" id="socDireccion" name="socDireccion" value="{{ $socio->socDireccion }}" required>
        </div>
        <div class="form-group">
            <label for="socTelefono">Teléfono</label>
            <input type="text" class="form-control" id="socTelefono" name="socTelefono" value="{{ $socio->socTelefono }}" required>
        </div>
        <div class="form-group">
            <label for="socCorreo">Correo</label>
            <input type="email" class="form-control" id="socCorreo" name="socCorreo" value="{{ $socio->socCorreo }}" required>
        </div>
        <button type="submit" class="btn btn-warning mt-3">Actualizar</button>
    </form>
</div>
@endsection
