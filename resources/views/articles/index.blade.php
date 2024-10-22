

@extends('layouts.app')

@section('content')
    <h1>Liste des Articles</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-2">Nouvel Article</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Désignation</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->designation }}</td>
                    <td>{{ $article->prix }}</td>
                    <td>{{ $article->quantite }}</td>
                    <td>
                        @if($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->designation }}" style="max-width: 100px;">
                        @else
                            Aucune image disponible
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
