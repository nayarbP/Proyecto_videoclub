@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Socios</h1>
    <a href="{{ route('socio.create') }}" class="btn btn-primary">Nuevo Socio</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($socios as $socio)
                <tr>
                    <td>{{ $socio->socCedula }}</td>
                    <td>{{ $socio->socNombre }}</td>
                    <td>
                        <a href="{{ route('socio.show', $socio->socId) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('socio.edit', $socio->socId) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('socio.destroy', $socio->socId) }}" method="POST" style="display:inline;">
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
