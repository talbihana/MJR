@extends('admin.employees.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Employees Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nom : {{ $employees->nom}}</h5>
            <p class="card-text">Adress : {{ $employees->adress}}</p>
            <p class="card-title">Téléphone : {{ $employees->téléphone}}</p>

    </div>
      </hr>
    </div>
</div>
