@extends('activites.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Create New Activites </div>
    <div class="card-body">
        <form action="{{ url('activite')}}" method="post">
            {!! csrf_field() !!}
            <label>SP</label><br>
            <input type="text" name="sp" id="sp" class="form-control"><br>
            <label>LS</label><br>
            <input type="text" name="ls" id="ls" class="form-control"><br>
            <label>AC</label><br>
            <input type="text" name="ac" id="ac" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>

@stop
