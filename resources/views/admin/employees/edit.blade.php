@extends('admin.employees.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit Employee</div>
    <div class="card-body">
        <form action="{{ url('admin/employee/' .$employees->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id"/>
            <label>Nom</label><br>
            <input type="text" name="nom" id="nom" value="{{$employees->nom}}" class="form-control"><br>
            <label>Adress</label><br>
            <input type="text" name="adress" id="adress" value="{{$employees->adress}}" class="form-control"><br>
            <label>Téléphone</label><br>
            <input type="text" name="téléphone" id="téléphone" value="{{$employees->téléphone}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
</div>

@stop
