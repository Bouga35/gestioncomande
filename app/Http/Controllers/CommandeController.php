<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    //
    public function index()
    {
        $commandes = Commande::with('client')->get();
        return view('commandes.index', compact('commandes'));
    }
    public function create()
    {
        $clients = Client::all();
        return view('commandes.create', compact('clients'));
    }
     
    public function store(Request $request )
    {
        $validatedData = $request->validate([
            'adresse_livraison' => 'required|string',
            'id_client' => 'required|exists:clients,id',
        ]);

        Commande::create($validatedData);
        return redirect()->route('commandes.index')->with('success', 'Commande created successfully.');
    }


    public function edit($id)
    {
        $commande = Commande::findOrFail($id);
        $clients = Client::all();
        return view('commandes.edit', compact('commande', 'clients'));
    }

    public function update(Request $request, $id)
    {
        $commande = Commande::findOrFail($id);

        $validatedData = $request->validate([
            'adresse_livraison' => 'required|string',
            'id_client' => 'required|exists:clients,id',
        ]);

        $commande->update($validatedData);
        return redirect()->route('commandes.index')->with('success', 'Commande updated successfully.');
    }

    public function destroy($id)
    {
        $commande = Commande::findOrFail($id);
        $commande->delete();
        return redirect()->route('commandes.index')->with('success', 'Commande deleted successfully.');
    }
    public function show($id)
    {
        $commande = Commande::with('client')->findOrFail($id);
        return view('commandes.show', compact('commande'));
    }
}
