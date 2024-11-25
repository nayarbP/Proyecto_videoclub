@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Directores</h1>
    <a href="{{ route('director.create') }}" class="btn btn-primary">Nuevo Director</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($directores as $director)
            <tr>
                <td>{{ $director->dirNombre }}</td>
                <td>
                    <a href="{{ route('director.edit', $director->dirId) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('director.destroy', $director->dirId) }}" method="POST" style="display:inline;">
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
