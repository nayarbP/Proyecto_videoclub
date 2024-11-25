@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Formato</h1>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <td>{{ $formato->forNombre }}</td>
        </tr>
    </table>
    <a href="{{ route('formato.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
