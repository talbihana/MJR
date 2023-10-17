@extends('activites.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Activites Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">SP : {{ $activites->sp}}</h5>
            <p class="card-text">LS : {{ $activites->ls}}</p>
            <p class="card-title">AC : {{ $activites->ac}}</p>

    </div>
      </hr>
    </div>
</div>
