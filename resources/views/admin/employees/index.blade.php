@extends('admin.employees.layout')
@section('content')
<style>
    body {
    margin: 0px;
    padding: 0px;
    background-color: #1b203d;
    overflow: hidden;
    font-family: system-ui;
}
.clearfix {
    clear: both;

}
.logo {
    margin: 0px;
    margin-left: 28px;
    font-weight: bold;
    color: white;
    margin-bottom: 30px;
    font-size: 36px;

}
.logo span {
    color: #f7403b;
}
.sidenav {
    height: 100%;

    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #272c4a;
    overflow: hidden;
    transition: 0.5s;
    padding-top: 30px
}
.sidenav a {
    padding: 15px 8px 15px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;


}
.sidenav a:hover {
    color: #f1f1f1;
    background-color: #1b203d;

}
#main {
    transition: margin-left .5s;
    padding: 16px;
    margin-left: 300px;

}
.head {
    padding: 20px;
}
.col-div-6 {
    width: 50%;
    float: left;

}
.profile {
    display: inline-block;
    float: right;
    width: 160px;
}
.pro-img {
    float: left;
    width: 40px;
    margin-top: 5px;

}
.profile p {
    color: white;
    font-weight: 500;
    margin-left: 55px;
    margin-top: 10px;
    font-size:13.5px;
}
.profile p span {
    font-weight: 400;
    font-size: 12px;
    display: block;
    color: #8e8b8b;
}
.nav2 {
    display: none;
}
.table {
    color: white;

}
.card-header {
    color: white;
    margin-left: 40%;
}
</style>
<div id="mySidenav" class="sidenav">
    <p class="logo"><span>M</span>-Jeunese</p>
    <a href="#" class="icon-a" ><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;
    Dashboard</a>
    <a href="#" class="icon-a" id="admin.employees"><i class="fa fa-user icons"></i>&nbsp;&nbsp;
   Employees</a>
    <a href="#" class="icon-a"><i class="fa fa-list icons"></i>&nbsp;&nbsp;
    Evenement</a>
    <a href="#" class="icon-a"><i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp;
   Orders</a>
    <a href="#" class="icon-a"><i class="fa fa-tasks icons"></i>&nbsp;&nbsp;
   Inventory</a>
    <a href="#" class="icon-a"><i class="fa fa-user icons"></i>&nbsp;&nbsp;
  Accounts</a>
    <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i>&nbsp;&nbsp;
   Tasks</a>
</div>
<div class="container" href="#">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card-header">
                  <h2>Employees</h2>
              </div>
              <div class="card-body">
                <a href="{{ url('/admin/employee/create')}}" class="btn btn-success btn-sm" title= "Add new employee">
                    Add new
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>

                                <th>Nom</th>
                                <th>Adress</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $item )
                            <tr>
                               
                                <td>{{ $item->nom}}</td>
                                <td>{{ $item->adress}}</td>
                                <td>{{ $item->téléphone}}</td>
                                <td>
                                    <a href="{{ url('/admin/employee/' . $item->id)}}" title="View Employees"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                    <a href="{{ url('/admin/employee/' . $item->id . '/edit')}}" title="Edit Employees"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                     <form method="POST" action="{{ url('/admin/employee' . '/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
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

