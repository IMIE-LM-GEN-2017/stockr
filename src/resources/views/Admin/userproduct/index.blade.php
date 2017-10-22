@extends('layouts.app')

@section('title', 'Liste des tags')

@section('content')
    <h1>Produits du fournisseur</h1>

    <a href="{{route('AdminUserProdCreate')}}" class="btn btn-primary">Nouveau produit</a>

    <table class="table.visible-lg">
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
        @foreach($userproducts as $userproduct)
            <tr>
                <td>
                    <a href="{{route('AdminUserProdDestroy', ['id'=>$userproduct->id])}}" class="btn btn-xs btn-danger">Supprimer</a>
                    <a href="{{route('AdminUserProdEdit', ['id'=>$userproduct->id])}}" class="btn btn-xs btn-primary">Editer</a>
                    <a href="{{route('AdminUserProdShow', ['id'=>$userproduct->id])}}" class="btn btn-xs btn-primary">Afficher</a>
                </td>
                <td>{{$userproduct->quantity}}</td>
                <td>{{$userproduct->name}}</td>
                <td>{{$userproduct->created_at}}</td>
                <td>{{$userproduct->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection