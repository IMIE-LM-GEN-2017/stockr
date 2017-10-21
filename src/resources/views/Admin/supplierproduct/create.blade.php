@extends('layouts.app')

@section('content')
    {!! Form::open(['route'=>'AdminCatStore']) !!}
    {!! Form::text('name') !!}
    {!! Form::textarea('description') !!}
    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection