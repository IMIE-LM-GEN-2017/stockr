@extends('layouts.app')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Actions</th>
            <th>Nom</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td><a href="{{route('AdminCatShow', ['id'=>$category->id])}}">Voir</a> / Modifier / Supprimer</td>
                <td>{{$category->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection