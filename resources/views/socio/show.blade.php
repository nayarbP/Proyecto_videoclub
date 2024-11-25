@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Socio</h1>
    <table class="table">
        <tr>
            <th>Cédula</th>
            <td>{{ $socio->socCedula }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $socio->socNombre }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $socio->socDireccion }}</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td>{{ $socio->socTelefono }}</td>
        </tr>
        <tr>
            <th>Correo</th>
            <td>{{ $socio->socCorreo }}</td>
        </tr>
    </table>
    <a href="{{ route('socio.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
