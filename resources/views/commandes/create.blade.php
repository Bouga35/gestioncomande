@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Commande</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('commandes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="adresse_livraison">Adresse Livraison</label>
            <input type="text" class="form-control" id="adresse_livraison" name="adresse_livraison" value="{{ old('adresse_livraison') }}">
        </div>
        <div class="form-group">
            <label for="id_client">Client</label>
            <select class="form-control" id="id_client" name="id_client">
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->nom }} {{ $client->prenom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
