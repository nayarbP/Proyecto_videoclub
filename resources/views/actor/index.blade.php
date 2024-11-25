@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Actores</h1>
    <a href="{{ route('actor.create') }}" class="btn btn-primary">Nuevo Actor</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actores as $actor)
            <tr>
                <td>{{ $actor->actNombre }}</td>
                <td>{{ $actor->sexo->sexNombre }}</td>
                <td>
                    <a href="{{ route('actor.edit', $actor->actId) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('actor.destroy', $actor->actId) }}" method="POST" style="display:inline;">
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
