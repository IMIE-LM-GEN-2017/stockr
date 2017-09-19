@extends('layouts.app')

@section('title', 'Liste des tags')

@section('content')
    <h1>Catégories</h1>

    <a href="{{route('AdminCatCreate')}}" class="btn btn-primary">Nouvelle catégorie</a>

    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>nom</td>
            <td>créer le</td>
            <td>mis à jour le</td>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>
                    <a href="{{route('AdminCatDestroy', ['id'=>$category->id])}}" class="btn btn-xs btn-danger">Supprimer</a>
                    <a href="{{route('AdminCatEdit', ['id'=>$category->id])}}" class="btn btn-xs btn-primary">Editer</a>
                    <a href="{{route('AdminCatShow', ['id'=>$category->id])}}" class="btn btn-xs btn-primary">Afficher</a>
                </td>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection