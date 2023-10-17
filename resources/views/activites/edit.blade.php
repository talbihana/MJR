@extends('activites.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit Activites</div>
    <div class="card-body">
        <form action="{{ url('activite/' .$activites->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$activites->id}}" id="id"/>
            <label>SP</label><br>
            <input type="text" name="sp" id="sp" value="{{$activites->sp}}" class="form-control"><br>
            <label>LS</label><br>
            <input type="text" name="ls" id="ls" value="{{$activites->ls}}" class="form-control"><br>
            <label>AC</label><br>
            <input type="text" name="ac" id="ac" value="{{$activites->ac}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
</div>

@stop
