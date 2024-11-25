@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de Sexo</h1>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <td>{{ $sexo->sexNombre }}</td>
        </tr>
    </table>
    <a href="{{ route('sexo.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
