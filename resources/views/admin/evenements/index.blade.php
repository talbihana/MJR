@extends('admin.evenements.layout')
@section('content')


<div class="container" href="#">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card-header">
                  <h2>Evenements</h2>
              </div>
              <div class="card-body">
                <a href="{{ url('/admin/evenement/create')}}" class="btn btn-success btn-sm" title= "Add new evenement">
                    Add new
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>

                                <th>Nom</th>

                                <th>Téléphone</th>
                                <th>Événements</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($evenements as $item )
                            <tr>
                                
                                <td>{{ $item->nom}}</td>
                                <td>{{ $item->téléphone}}</td>
                                <td>{{ $item->événements}}</td>

                                <td>
                                    <a href="{{ url('/admin/evenement/' . $item->id)}}" title="View Evenements"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                    <a href="{{ url('/admin/evenement/' . $item->id . '/edit')}}" title="Edit Evenements"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                     <form method="POST" action="{{ url('/admin/evenement' . '/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE')}}
                                        {{ csrf_field()}}
                                       <button type="submit" class="btn btn-danger btn-sm" title="Delete Evenements" onclick="return confirm("confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>Delet</button></a>
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

