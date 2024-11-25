<?php
namespace App\Http\Controllers;

use App\Models\Formato;
use Illuminate\Http\Request;

class FormatoController extends Controller
{
    public function index()
    {
        $formatos = Formato::all();
        return view('formato.index', compact('formatos'));
    }

    public function create()
    {
        return view('formato.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'forNombre' => 'required|max:60',
        ]);

        Formato::create($request->all());
        return redirect()->route('formato.index')->with('success', 'Formato creado correctamente.');
    }

    public function edit(Formato $formato)
    {
        return view('formato.edit', compact('formato'));
    }

    public function update(Request $request, Formato $formato)
    {
        $request->validate([
            'forNombre' => 'required|max:60',
        ]);

        $formato->update($request->all());
        return redirect()->route('formato.index')->with('success', 'Formato actualizado correctamente.');
    }

    public function destroy(Formato $formato)
    {
        $formato->delete();
        return redirect()->route('formato.index')->with('success', 'Formato eliminado correctamente.');
    }
}
