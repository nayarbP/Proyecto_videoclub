@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Actor</h1>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <td>{{ $actor->actNombre }}</td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td>{{ $actor->sexo->sexNombre }}</td>
        </tr>
    </table>
    <a href="{{ route('actor.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
