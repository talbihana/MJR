@extends('activites.layout')
@section('content')


<div class="container" href="#">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card-header">
                  <h2>Activites</h2>
              </div>
              <div class="card-body">
                <a href="{{ url('/activite/create')}}" class="btn btn-success btn-sm" title= "Add new activite">
                    Add new
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>

                                <th>SP</th>
                                <th>LS</th>
                                <th>AC</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activites as $item )
                            <tr>

                                <td>{{ $item->SP}}</td>
                                <td>{{ $item->LS}}</td>
                                <td>{{ $item->AC}}</td>
                                <td>
                                    <a href="{{ url('activite/' . $item->id)}}" title="View Activites"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                    <a href="{{ url('activite/' . $item->id . '/edit')}}" title="Edit Activites"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                     <form method="POST" action="{{ url('activite' . '/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE')}}
                                        {{ csrf_field()}}
                                       <button type="submit" class="btn btn-danger btn-sm" title="Delete Employee" onclick="return confirm("confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>Delet</button></a>
                                     </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
       </div>
     </div>
 </div>
 @endsection

