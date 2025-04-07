<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    public function index()
{
    $medicamentos = Medicamento::all();
    return view('medicamentos.index', compact('medicamentos'));
}


    public function create()
    {
        return view('medicamentos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        Medicamento::create($request->all());

        return redirect()->route('medicamentos.index')
                         ->with('success', 'Medicamento creado correctamente.');
    }

    public function show(Medicamento $medicamento)
    {
        return view('medicamentos.show', compact('medicamento'));
    }

    public function edit(Medicamento $medicamento)
    {
        return view('medicamentos.edit', compact('medicamento'));
    }

    public function update(Request $request, Medicamento $medicamento)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        $medicamento->update($request->all());

        return redirect()->route('medicamentos.index')
                         ->with('success', 'Medicamento actualizado correctamente.');
    }

    public function destroy(Medicamento $medicamento)
    {
        $medicamento->delete();

        return redirect()->route('medicamentos.index')
                         ->with('success', 'Medicamento eliminado correctamente.');
    }
}
