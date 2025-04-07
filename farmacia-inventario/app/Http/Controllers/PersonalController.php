<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personal = Personal::all();
        return view('personal.index', compact('personal'));
    }

    public function create()
    {
        return view('personal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'cargo' => 'required',
        ]);

        Personal::create($request->all());
        return redirect()->route('personal.index');
    }

    public function edit($id)
    {
        $persona = Personal::findOrFail($id);
        return view('personal.edit', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'cargo' => 'required',
        ]);

        $persona = Personal::findOrFail($id);
        $persona->update($request->all());
        return redirect()->route('personal.index');
    }

    public function destroy($id)
    {
        Personal::destroy($id);
        return redirect()->route('personal.index');
    }
}
