@extends('layouts.app')

@section('title', 'Liste des tags')

@section('content')
    <h1>Nouveaux produits des fournisseurs</h1>

    <a href="{{route('AdminSuppProdCreate')}}" class="btn btn-primary">Nouveau produit du fournisseur</a>

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
        @foreach($supplierproducts as $supplierproduct)
            <tr>
                <td>
                    <a href="{{route('AdminSuppProdDestroy', ['id'=>$supplierproduct->id])}}" class="btn btn-xs btn-danger">Supprimer</a>
                    <a href="{{route('AdminSuppProdEdit', ['id'=>$supplierproduct->id])}}" class="btn btn-xs btn-primary">Editer</a>
                    <a href="{{route('AdminSuppProdShow', ['id'=>$supplierproduct->id])}}" class="btn btn-xs btn-primary">Afficher</a>
                </td>
                <td>{{$supplierproduct->quantity}}</td>
                <td>{{$supplierproduct->name}}</td>
                <td>{{$supplierproduct->created_at}}</td>
                <td>{{$supplierproduct->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection