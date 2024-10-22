@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Commande Détails</h2>
    <div class="card">
        <div class="card-header">
            Commande #{{ $commande->id }}
        </div>
        <div class="card-body">
            <p><strong>Adresse Livraison:</strong> {{ $commande->adresse_livraison }}</p>
            <p><strong>Client:</strong> {{ $commande->client->nom }} {{ $commande->client->prenom }}</p>
            <p><strong>Date de Création:</strong> {{ $commande->created_at }}</p>
            <p><strong>Dernière Mise à Jour:</strong> {{ $commande->updated_at }}</p>
            <a href="{{ route('commandes.index') }}" class="btn btn-primary">Retour à la liste des commandes</a>
        </div>
    </div>
</div>
@endsection
