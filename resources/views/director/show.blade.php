@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Director</h1>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <td>{{ $director->dirNombre }}</td>
        </tr>
    </table>
    <a href="{{ route('director.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
