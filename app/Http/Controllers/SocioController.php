<?php
namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    public function index()
    {
        $socios = Socio::all();
        return view('socio.index', compact('socios'));
    }

    public function create()
    {
        return view('socio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'socCedula' => 'required|size:10|unique:socios,socCedula',
            'socNombre' => 'required|max:60',
            'socDireccion' => 'required|max:60',
            'socTelefono' => 'required|size:10',
            'socCorreo' => 'required|email|max:60|unique:socios,socCorreo',
        ]);

        Socio::create($request->all());
        return redirect()->route('socio.index')->with('success', 'Socio creado correctamente.');
    }

    public function edit(Socio $socio)
    {
        return view('socio.edit', compact('socio'));
    }

    public function update(Request $request, Socio $socio)
    {
        $request->validate([
            'socCedula' => 'required|size:10|unique:socios,socCedula,' . $socio->socId . ',socId',
            'socNombre' => 'required|max:60',
            'socDireccion' => 'required|max:60',
            'socTelefono' => 'required|size:10',
            'socCorreo' => 'required|email|max:60|unique:socios,socCorreo,' . $socio->socId . ',socId',
        ]);

        $socio->update($request->all());
        return redirect()->route('socio.index')->with('success', 'Socio actualizado correctamente.');
    }

    public function destroy(Socio $socio)
    {
        $socio->delete();
        return redirect()->route('socio.index')->with('success', 'Socio eliminado correctamente.');
    }
}
