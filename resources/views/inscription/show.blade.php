@extends('inscription.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Inscriptions Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nom : {{ $inscriptions->nom}}</h5>
            <p class="card-text">Prénom : {{ $inscriptions->prénom}}</p>
            <p class="card-title">Age : {{ $inscriptions->age}}</p>

    </div>
      </hr>
    </div>
</div>
