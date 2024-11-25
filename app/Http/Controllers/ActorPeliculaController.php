<?php
namespace App\Http\Controllers;

use App\Models\ActorPelicula;
use App\Models\Actor;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class ActorPeliculaController extends Controller
{
    public function index()
    {
        $actoresPeliculas = ActorPelicula::all();
        return view('actor_pelicula.index', compact('actoresPeliculas'));
    }

    public function create()
    {
        $actores = Actor::all();
        $peliculas = Pelicula::all();
        return view('actor_pelicula.create', compact('actores', 'peliculas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'actId' => 'required|exists:actores,actId',
            'pelId' => 'required|exists:peliculas,pelId',
            'aplPapel' => 'required|max:60',
        ]);

        ActorPelicula::create($request->all());
        return redirect()->route('actor_pelicula.index')->with('success', 'Actor-Pelicula creada correctamente.');
    }

    public function edit(ActorPelicula $actorPelicula)
    {
        $actores = Actor::all();
        $peliculas = Pelicula::all();
        return view('actor_pelicula.edit', compact('actorPelicula', 'actores', 'peliculas'));
    }

    public function update(Request $request, ActorPelicula $actorPelicula)
    {
        $request->validate([
            'actId' => 'required|exists:actores,actId',
            'pelId' => 'required|exists:peliculas,pelId',
            'aplPapel' => 'required|max:60',
        ]);

        $actorPelicula->update($request->all());
        return redirect()->route('actor_pelicula.index')->with('success', 'Actor-Pelicula actualizada correctamente.');
    }

    public function destroy(ActorPelicula $actorPelicula)
    {
        $actorPelicula->delete();
        return redirect()->route('actor_pelicula.index')->with('success', 'Actor-Pelicula eliminada correctamente.');
    }
}
