@extends('layouts.app')

@section('title', 'Liste des tags')

@section('content')
    <h1>Fournisseurs</h1>

    <a href="{{route('AdminSuppCreate')}}" class="btn btn-primary">Nouveau fournisseur</a>

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
        @foreach($suppliers as $supplier)
            <tr>
                <td>
                    <a href="{{route('AdminSuppDestroy', ['id'=>$supplier->id])}}" class="btn btn-xs btn-danger">Supprimer</a>
                    <a href="{{route('AdminSuppEdit', ['id'=>$supplier->id])}}" class="btn btn-xs btn-primary">Editer</a>
                    <a href="{{route('AdminSuppShow', ['id'=>$supplier->id])}}" class="btn btn-xs btn-primary">Afficher</a>
                </td>
                <td>{{$supplier->quantity}}</td>
                <td>{{$supplier->name}}</td>
                <td>{{$supplier->created_at}}</td>
                <td>{{$supplier->updated_at}}</td>
            </tr>
        @endforsupp
        </tbody>
    </table>
@endsection