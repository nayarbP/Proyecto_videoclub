@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Sexos</h1>
    <a href="{{ route('sexo.create') }}" class="btn btn-primary">Nuevo Sexo</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sexos as $sexo)
                <tr>
                    <td>{{ $sexo->sexNombre }}</td>
                    <td>
                        <a href="{{ route('sexo.show', $sexo->sexId) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('sexo.edit', $sexo->sexId) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('sexo.destroy', $sexo->sexId) }}" method="POST" style="display:inline;">
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
