<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    //
    public function index()
    {
        $clients =Client::all();
        return view('clients.index',compact('clients'));
    }
    public function create(){
        return view('clients.create');

    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'sexe' => 'required|string',
            'email' => 'required|email|unique:clients,email',
            'telephone' => 'required|string'
        ]);

        Client::create($validatedData);
        return redirect()->route('clients.index')->with('success', 'Client created successfully.');
    }


    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $validatedData = $request->validate([
            'nom' => 'sometimes|required|string',
            'prenom' => 'sometimes|required|string',
            'sexe' => 'sometimes|required|string',
            'email' => 'sometimes|required|email|unique:clients,email,' . $client->id,
            'telephone' => 'sometimes|required|string',
        ]);

        $client->update($validatedData);
        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }
}
