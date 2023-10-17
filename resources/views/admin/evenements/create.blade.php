@extends('admin.evenements.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Create New Evenement </div>
    <div class="card-body">
        <form action="{{ url('admin/evenement')}}" method="post">
            {!! csrf_field() !!}
            <label>Nom</label><br>
            <input type="text" name="nom" id="nom" class="form-control"><br>

            <label>Téléphone</label><br>
            <input type="text" name="téléphone" id="téléphone" class="form-control"><br>
            <label>Événements</label><br>
            <input type="text" name="événements" id="événements" class="form-control"><br>

            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>

@stop
