@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Géneros</h1>
    <a href="{{ route('genero.create') }}" class="btn btn-primary">Nuevo Género</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($generos as $genero)
                <tr>
                    <td>{{ $genero->genNombre }}</td>
                    <td>
                        <a href="{{ route('genero.show', $genero->genId) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('genero.edit', $genero->genId) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('genero.destroy', $genero->genId) }}" method="POST" style="display:inline;">
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
