@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Actor Pelicula</h1>
    <form action="{{ route('actor_pelicula.update', $actorPelicula->aplId) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="actId">Actor</label>
            <select name="actId" id="actId" class="form-control" required>
                @foreach ($actores as $actor)
                <option value="{{ $actor->actId }}" {{ $actorPelicula->actId == $actor->actId ? 'selected' : '' }}>{{ $actor->actNombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="pelId">Pelicula</label>
            <select name="pelId" id="pelId" class="form-control" required>
                @foreach ($peliculas as $pelicula)
                <option value="{{ $pelicula->pelId }}" {{ $actorPelicula->pelId == $pelicula->pelId ? 'selected' : '' }}>{{ $pelicula->pelNombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="aplPapel">Papel</label>
            <input type="text" name="aplPapel" id="aplPapel" class="form-control" value="{{ $actorPelicula->aplPapel }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Actor Pelicula</button>
    </form>
</div>
@endsection
