@extends('layouts.app')

@section('title', 'Liste des membres')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>pseudo</td>
            <td>first_name</td>
            <td>last_name</td>
            <td>email</td>
            <td>phone</td>
            <td>created</td>
            <td>updated</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="{{route('AdminUserDestroy', ['id'=>$user->id])}}">Supprimer</a>
                    <a href="{{route('AdminUserEdit', ['id'=>$user->id])}}">Editer</a>
                    <a href="{{route('AdminUserShow', ['id'=>$user->id])}}">Afficher</a>
                </td>
                <td>{{$user->id}}</td>
                <td>{{$user->pseudo}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection