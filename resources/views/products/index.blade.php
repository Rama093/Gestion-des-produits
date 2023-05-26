@extends('layouts.app')
  
@section('titre', 'Produits')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste des Product</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Ajouter un produit</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Prix</th>
                <th>Code du Produit</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->titre }}</td>
                        <td class="align-middle">{{ $rs->prix }} Fcfa</td>
                        <td class="align-middle">#{{ $rs->code_produit }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Voir</a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Editer</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Aucun produit trouvé</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection