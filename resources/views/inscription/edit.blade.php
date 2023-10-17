@extends('inscription.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit Inscription</div>
    <div class="card-body">
        <form action="{{ url('inscription/' .$inscriptions->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$inscriptions->id}}" id="id"/>
            <label>Nom</label><br>
            <input type="text" name="nom" id="nom" value="{{$inscriptions->nom}}" class="form-control"><br>
            <label>Prénom</label><br>
            <input type="text" name="prénom" id="prénom" value="{{$inscriptions->prénom}}" class="form-control"><br>
            <label>Age</label><br>
            <input type="text" name="age" id="age" value="{{$inscriptions->age}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
</div>

@stop
