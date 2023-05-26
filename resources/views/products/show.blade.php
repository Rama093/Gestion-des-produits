@extends('layouts.app')
  
@section('titre', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail du produit</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{ $product->titre }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Prix</label>
            <input type="text" name="prix" class="form-control" placeholder="Prix" value="{{ $product->prix }} Fcfa" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Code du produit</label>
            <input type="text" name="code_produit" class="form-control" placeholder="Product Code" value="#{{ $product->code_produit }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Crée le:</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Modifié le:</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}"
             readonly>
        </div>
    </div>
@endsection