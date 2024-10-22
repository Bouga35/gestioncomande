

@extends('layouts.app')

@section('content')
    <h1>Créer un nouvel Article</h1>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="designation">Désignation</label>
            <input type="text" class="form-control" id="designation" name="designation" value="{{ old('designation') }}">
            @error('designation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="text" class="form-control" id="prix" name="prix" value="{{ old('prix') }}">
            @error('prix')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="quantite">Quantité</label>
            <input type="text" class="form-control" id="quantite" name="quantite" value="{{ old('quantite') }}">
            @error('quantite')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
@endsection
