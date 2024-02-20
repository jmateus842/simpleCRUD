<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContratoRequest; // Add if you have a request class
use App\Http\Requests\UpdateContratoRequest; // Add if you have a request class
use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    public function index()
    {
        $contratos = Contrato::all();
        return view('contratos.index', compact('contratos'));
    }

    public function create()
    {
        return view('contratos.create');
    }

    public function store(Request $request)
    {
        // Perform validation
        $validatedData = $request->validate([
            'ciudad' => 'required|max:50', // Replace with your validation rules
            'pago' => 'nullable|numeric', // Replace with your validation rules
            'categoria' => 'nullable|max:50'
        ]);

        // Create the contract
        Contrato::create($validatedData);

        // Redirect with success message
        return redirect()->route('contratos.index')->with('success', 'Contrato creado exitosamente!');
    }

    public function show(Contrato $contrato)
    {
        return view('contratos.show', compact('contrato'));
    }

    public function edit(Contrato $contrato)
    {
        return view('contratos.edit', compact('contrato'));
    }

    public function update(UpdateContratoRequest $request, Contrato $contrato)  // Change to your actual request class name
    {
        $contrato->update($request->validated());
        return redirect()->route('contratos.index')->with('success', 'Contrato actualizado');
    }

    public function destroy(Contrato $contrato)
    {
        $contrato->delete();
        return redirect()->route('contratos.index')->with('success', 'Contrato eliminado');
    }
}
