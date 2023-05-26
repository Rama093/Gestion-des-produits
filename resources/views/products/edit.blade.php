@extends('layouts.app')
  
@section('titre', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{ $product->titre }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Prix</label>
                <input type="text" name="prix" class="form-control" placeholder="Prix" value="{{ $product->prix }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Code Produit</label>
                <input type="text" name="code_produit" class="form-control" placeholder="Code Product" value="{{ $product->code_produit }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection