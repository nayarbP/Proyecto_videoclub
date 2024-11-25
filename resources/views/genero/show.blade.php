@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de Género</h1>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <td>{{ $genero->genNombre }}</td>
        </tr>
    </table>
    <a href="{{ route('genero.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
