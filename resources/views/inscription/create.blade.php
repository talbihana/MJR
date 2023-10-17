@extends('inscription.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Create New Inscriptions </div>
    <div class="card-body">
        <form action="{{ url('inscription')}}" method="post">
            {!! csrf_field() !!}
            <label>Nom</label><br>
            <input type="text" name="nom" id="nom" class="form-control"><br>
            <label>Prénom</label><br>
            <input type="text" name="prénom" id="prénom" class="form-control"><br>
            <label>Age</label><br>
            <input type="text" name="age" id="age" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>

@stop
