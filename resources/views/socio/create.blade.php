@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Socio</h1>
    <form action="{{ route('socio.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="socCedula">Cédula</label>
            <input type="text" class="form-control" id="socCedula" name="socCedula" required>
        </div>
        <div class="form-group">
            <label for="socNombre">Nombre</label>
            <input type="text" class="form-control" id="socNombre" name="socNombre" required>
        </div>
        <div class="form-group">
            <label for="socDireccion">Dirección</label>
            <input type="text" class="form-control" id="socDireccion" name="socDireccion" required>
        </div>
        <div class="form-group">
            <label for="socTelefono">Teléfono</label>
            <input type="text" class="form-control" id="socTelefono" name="socTelefono" required>
        </div>
        <div class="form-group">
            <label for="socCorreo">Correo</label>
            <input type="email" class="form-control" id="socCorreo" name="socCorreo" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Crear</button>
    </form>
</div>
@endsection
