<?php
namespace App\Http\Controllers;

use App\Models\Alquiler;
use App\Models\Socio;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class AlquilerController extends Controller
{
    public function index()
    {
        $alquilers = Alquiler::all();
        return view('alquiler.index', compact('alquilers'));
    }

    public function create()
    {
        $socios = Socio::all();
        $peliculas = Pelicula::all();
        return view('alquiler.create', compact('socios', 'peliculas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'socId' => 'required|exists:socios,socId',
            'pelId' => 'required|exists:peliculas,pelId',
            'alqFechaDesde' => 'required|date',
            'alqFechaHasta' => 'required|date',
            'alqValor' => 'required|numeric',
            'alqFechaEntrega' => 'nullable|date',
        ]);

        Alquiler::create($request->all());
        return redirect()->route('alquiler.index')->with('success', 'Alquiler creado correctamente.');
    }

    public function edit(Alquiler $alquiler)
    {
        $socios = Socio::all();
        $peliculas = Pelicula::all();
        return view('alquiler.edit', compact('alquiler', 'socios', 'peliculas'));
    }

    public function update(Request $request, Alquiler $alquiler)
    {
        $request->validate([
            'socId' => 'required|exists:socios,socId',
            'pelId' => 'required|exists:peliculas,pelId',
            'alqFechaDesde' => 'required|date',
            'alqFechaHasta' => 'required|date',
            'alqValor' => 'required|numeric',
            'alqFechaEntrega' => 'nullable|date',
        ]);

        $alquiler->update($request->all());
        return redirect()->route('alquiler.index')->with('success', 'Alquiler actualizado correctamente.');
    }

    public function destroy(Alquiler $alquiler)
    {
        $alquiler->delete();
        return redirect()->route('alquiler.index')->with('success', 'Alquiler eliminado correctamente.');
    }
}
