@extends('layouts.app')

@section('title', 'Liste des tags')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>nom</td>
            <td>description</td>
            <td>créer le</td>
            <td>mis à jour le</td>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>
                    <a href="{{route('AdminCatDestroy', ['id'=>$category->id])}}">Supprimer</a>
                    <a href="{{route('AdminCatEdit', ['id'=>$category->id])}}">Editer</a>
                    <a href="{{route('AdminCatShow', ['id'=>$category->id])}}">Afficher</a>
                </td>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection