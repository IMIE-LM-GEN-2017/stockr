@extends('layouts.app')

@section('content')
    <h1>Editer un nouveau produit de l'utilisateur</h1>
    <a href="{{route('AdminUserProdIndex')}}" class="btn btn-primary">Retours à la liste</a>

    {{--    {!! Form::open(['route'=>'AdminCatStore']) !!}--}}
    <form action="{{route('AdminUserProdUpdate', ['id'=>$userproduct->id])}}" method="post">

        {{csrf_field()}}

        <div class="form-group.visible-lg{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">Nom</label>
            <input id="name" type="text" class="form-control" name="name" placeholder="Nom" value="{{ $userproduct->name }}">
            @if ($errors->has('name'))
                <div class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="exampleInputPassword1">Description</label>
            <textarea class="form-control" name="description"
                      placeholder="Description">{{ $userproduct->description }}</textarea>
            @if ($errors->has('description'))
                <div class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </div>
            @endif
        </div>

        <input type="submit" value="enregistrer" class="btn btn-primary">
    </form>
    {{--{!! Form::close() !!}--}}
@endsection