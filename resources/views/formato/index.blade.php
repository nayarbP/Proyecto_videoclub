@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Formatos</h1>
    <a href="{{ route('formato.create') }}" class="btn btn-primary">Nuevo Formato</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formatos as $formato)
            <tr>
                <td>{{ $formato->forNombre }}</td>
                <td>
                    <a href="{{ route('formato.edit', $formato->forId) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('formato.destroy', $formato->forId) }}" method="POST" style="display:inline;">
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
