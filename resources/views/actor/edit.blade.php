@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Actor</h1>
    <form action="{{ route('actor.update', $actor->actId) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="actNombre">Nombre</label>
            <input type="text" name="actNombre" id="actNombre" class="form-control" value="{{ $actor->actNombre }}" required>
        </div>
        <div class="form-group">
            <label for="sexId">Sexo</label>
            <select name="sexId" id="sexId" class="form-control" required>
                @foreach ($sexos as $sexo)
                <option value="{{ $sexo->sexId }}" {{ $actor->sexId == $sexo->sexId ? 'selected' : '' }}>{{ $sexo->sexNombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Actor</button>
    </form>
</div>
@endsection
