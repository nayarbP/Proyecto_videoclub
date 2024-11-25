@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Actor</h1>
    <form action="{{ route('actor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="actNombre">Nombre</label>
            <input type="text" name="actNombre" id="actNombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="sexId">Sexo</label>
            <select name="sexId" id="sexId" class="form-control" required>
                @foreach ($sexos as $sexo)
                <option value="{{ $sexo->sexId }}">{{ $sexo->sexNombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Crear Actor</button>
    </form>
</div>
@endsection
