<?php
namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Sexo;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
        $actores = Actor::all();
        return view('actor.index', compact('actores'));
    }

    public function create()
    {
        $sexos = Sexo::all(); // Obtener los sexos
        return view('actor.create', compact('sexos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sexId' => 'required|exists:sexos,sexId',
            'actNombre' => 'required|max:60',
        ]);

        Actor::create($request->all());
        return redirect()->route('actor.index')->with('success', 'Actor creado correctamente.');
    }

    public function edit(Actor $actor)
    {
        $sexos = Sexo::all();
        return view('actor.edit', compact('actor', 'sexos'));
    }

    public function update(Request $request, Actor $actor)
    {
        $request->validate([
            'sexId' => 'required|exists:sexos,sexId',
            'actNombre' => 'required|max:60',
        ]);

        $actor->update($request->all());
        return redirect()->route('actor.index')->with('success', 'Actor actualizado correctamente.');
    }

    public function destroy(Actor $actor)
    {
        $actor->delete();
        return redirect()->route('actor.index')->with('success', 'Actor eliminado correctamente.');
    }
}
