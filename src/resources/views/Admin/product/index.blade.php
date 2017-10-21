@extends('layouts.app')

@section('title', 'Liste des tags')

@section('content')
    <h1>Productions</h1>

    <a href="{{route('AdminProdCreate')}}" class="btn btn-primary">Nouveau produit</a>

    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>Quantité</td>
            <td>nom</td>
            <td>créer le</td>
            <td>mis à jour le</td>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>
                    <a href="{{route('AdminProdDestroy', ['id'=>$product->id])}}" class="btn btn-xs btn-danger">Supprimer</a>
                    <a href="{{route('AdminProdEdit', ['id'=>$product->id])}}" class="btn btn-xs btn-primary">Editer</a>
                    <a href="{{route('AdminProdShow', ['id'=>$product->id])}}" class="btn btn-xs btn-primary">Afficher</a>
                </td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    product
@endsection