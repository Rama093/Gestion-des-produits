@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Ajouter Produit</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="titre" class="form-control" placeholder="Titre">
            </div>
            <div class="col">
                <input type="text" name="prix" class="form-control" placeholder="Prix">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="code_produit" class="form-control" placeholder="Code Produit">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </form>
@endsection