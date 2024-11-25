@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de Actor Pelicula</h1>
    <table class="table">
        <tr>
            <th>Actor</th>
            <td>{{ $actorPelicula->actor->actNombre }}</td>
        </tr>
        <tr>
            <th>Pelicula</th>
            <td>{{ $actorPelicula->pelicula->pelNombre }}</td>
        </tr>
        <tr>
            <th>Papel</th>
            <td>{{ $actorPelicula->aplPapel }}</td>
        </tr>
    </table>
    <a href="{{ route('actor_pelicula.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
