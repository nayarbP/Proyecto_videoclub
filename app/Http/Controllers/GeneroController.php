<?php
namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index()
    {
        $generos = Genero::all();
        return view('genero.index', compact('generos'));
    }

    public function create()
    {
        return view('genero.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'genNombre' => 'required|max:60',
        ]);

        Genero::create($request->all());
        return redirect()->route('genero.index')->with('success', 'Género creado correctamente.');
    }

    public function edit(Genero $genero)
    {
        return view('genero.edit', compact('genero'));
    }

    public function update(Request $request, Genero $genero)
    {
        $request->validate([
            'genNombre' => 'required|max:60',
        ]);

        $genero->update($request->all());
        return redirect()->route('genero.index')->with('success', 'Género actualizado correctamente.');
    }

    public function destroy(Genero $genero)
    {
        $genero->delete();
        return redirect()->route('genero.index')->with('success', 'Género eliminado correctamente.');
    }
}
