@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Actor Pelicula</h1>
    <a href="{{ route('actor_pelicula.create') }}" class="btn btn-primary">Nuevo Actor Pelicula</a>
    <table class="table">
        <thead>
            <tr>
                <th>Actor</th>
                <th>Pelicula</th>
                <th>Papel</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actorPeliculas as $actorPelicula)
            <tr>
                <td>{{ $actorPelicula->actor->actNombre }}</td>
                <td>{{ $actorPelicula->pelicula->pelNombre }}</td>
                <td>{{ $actorPelicula->aplPapel }}</td>
                <td>
                    <a href="{{ route('actor_pelicula.edit', $actorPelicula->aplId) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('actor_pelicula.destroy', $actorPelicula->aplId) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
