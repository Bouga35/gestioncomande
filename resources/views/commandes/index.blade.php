@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Commandes</h2>
    <a href="{{ route('commandes.create') }}" class="btn btn-primary mb-3">Add Commande</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Adresse Livraison</th>
                <th>Client</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $commande)
                <tr>
                    <td>{{ $commande->id }}</td>
                    <td>{{ $commande->adresse_livraison }}</td>
                    <td>{{ $commande->client->nom }} {{ $commande->client->prenom }}</td>
                    <td>
                        <a href="{{ route('commandes.show', $commande->id) }}" class="btn btn-info">Détails</a>
                        <a href="{{ route('commandes.edit', $commande->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('commandes.destroy', $commande->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
