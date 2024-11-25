<?php
namespace App\Http\Controllers;

use App\Models\Sexo;
use Illuminate\Http\Request;

class SexoController extends Controller
{
    public function index()
    {
        $sexos = Sexo::all();
        return view('sexo.index', compact('sexos'));
    }

    public function create()
    {
        return view('sexo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sexNombre' => 'required|max:60',
        ]);

        Sexo::create($request->all());
        return redirect()->route('sexo.index')->with('success', 'Sexo creado correctamente.');
    }

    public function edit(Sexo $sexo)
    {
        return view('sexo.edit', compact('sexo'));
    }

    public function update(Request $request, Sexo $sexo)
    {
        $request->validate([
            'sexNombre' => 'required|max:60',
        ]);

        $sexo->update($request->all());
        return redirect()->route('sexo.index')->with('success', 'Sexo actualizado correctamente.');
    }

    public function destroy(Sexo $sexo)
    {
        $sexo->delete();
        return redirect()->route('sexo.index')->with('success', 'Sexo eliminado correctamente.');
    }
}
