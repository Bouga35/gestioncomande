

@extends('layouts.app')

@section('content')
    <h1>Détails de l'Article</h1>
    <ul>
        <li><strong>Désignation:</strong> {{ $article->designation }}</li>
        <li><strong>Prix:</strong> {{ $article->prix }}</li>
        <li><strong>Quantité:</strong> {{ $article->quantite }}</li>
        <li><strong>Image:</strong> 
            @if($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->designation }}" style="max-width: 200px;">
            @else
                Aucune image disponible
            @endif
        </li>
    </ul>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Retour</a>
@endsection
