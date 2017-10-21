@extends('layouts.app')

@section('content')
    <h1>Editer une production</h1>
    <a href="{{route('AdmiProdIndex')}}" class="btn btn-primary">Retours à la liste</a>

    {{--    {!! Form::open(['route'=>'AdminCatStore']) !!}--}}
    <form action="{{route('AdminProdUpdate', ['id'=>$product->id])}}" method="post">

        {{csrf_field()}}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">Nom</label>
            <input id="name" type="text" class="form-control" name="name" placeholder="Nom" value="{{ $product->name }}">
            @if ($errors->has('name'))
                <div class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="exampleInputPassword1">Description</label>
            <textarea class="form-control" name="description"
                      placeholder="Description">{{ $product->description }}</textarea>
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