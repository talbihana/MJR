@extends('admin.evenements.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit Evenement</div>
    <div class="card-body">
        <form action="{{ url('admin/evenement/' .$evenements->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$evenements->id}}" id="id"/>
            <label>Nom</label><br>
            <input type="text" name="nom" id="nom" value="{{$evenements->nom}}" class="form-control"><br>

            <label>Téléphone</label><br>
            <input type="text" name="téléphone" id="téléphone" value="{{$evenements->téléphone}}" class="form-control"><br>
            <label>Événements</label><br>
            <input type="text" name="événements" id="événements" value="{{$evenements->événements}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
</div>

@stop
