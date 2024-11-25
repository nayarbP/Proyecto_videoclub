<?php
namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index()
    {
        $directores = Director::all();
        return view('director.index', compact('directores'));
    }

    public function create()
    {
        return view('director.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dirNombre' => 'required|max:60',
        ]);

        Director::create($request->all());
        return redirect()->route('director.index')->with('success', 'Director creado correctamente.');
    }

    public function edit(Director $director)
    {
        return view('director.edit', compact('director'));
    }

    public function update(Request $request, Director $director)
    {
        $request->validate([
            'dirNombre' => 'required|max:60',
        ]);

        $director->update($request->all());
        return redirect()->route('director.index')->with('success', 'Director actualizado correctamente.');
    }

    public function destroy(Director $director)
    {
        $director->delete();
        return redirect()->route('director.index')->with('success', 'Director eliminado correctamente.');
    }
}
