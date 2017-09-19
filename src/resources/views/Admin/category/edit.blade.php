@extends('layouts.app')

@section('title', 'Edition d\'une catégorie')

@section('content')
    {!! Form::model($category, ['route'=>['AdminCatUpdate', $category->id]]) !!}

    {!! Form::label('name') !!}
    {!! Form::text('name') !!}

    {!! Form::label('description') !!}
    {!! Form::textarea('description') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection