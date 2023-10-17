@extends('admin.evenements.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Evenements Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nom : {{ $evenements->nom}}</h5>

            <p class="card-title">Téléphone : {{ $evenements->téléphone}}</p>
            <p class="card-text">Événements : {{ $evenements->événements}}</p

    </div>
      </hr>
    </div>
</div>
