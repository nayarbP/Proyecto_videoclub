<?php
namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Models\Formato;
use App\Models\Genero;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('pelicula.index', compact('peliculas'));
    }

    public function create()
    {
        $formatos = Formato::all();
        $generos = Genero::all();
        return view('pelicula.create', compact('formatos', 'generos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'forId' => 'required|exists:formatos,forId',
            'genId' => 'required|exists:generos,genId',
            'pelTitulo' => 'required|max:100',
            'pelAnio' => 'required|numeric',
            'pelDuracion' => 'required|numeric',
        ]);

        Pelicula::create($request->all());
        return redirect()->route('pelicula.index')->with('success', 'Película creada correctamente.');
    }

    public function edit(Pelicula $pelicula)
    {
        $formatos = Formato::all();
        $generos = Genero::all();
        return view('pelicula.edit', compact('pelicula', 'formatos', 'generos'));
    }

    public function update(Request $request, Pelicula $pelicula)
    {
        $request->validate([
            'forId' => 'required|exists:formatos,forId',
            'genId' => 'required|exists:generos,genId',
            'pelTitulo' => 'required|max:100',
            'pelAnio' => 'required|numeric',
            'pelDuracion' => 'required|numeric',
        ]);

        $pelicula->update($request->all());
        return redirect()->route('pelicula.index')->with('success', 'Película actualizada correctamente.');
    }

    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return redirect()->route('pelicula.index')->with('success', 'Película eliminada correctamente.');
    }
}
