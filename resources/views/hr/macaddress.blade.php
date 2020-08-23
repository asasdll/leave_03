@extends('layouts.app')
@include('layouts.manu.hr.manu_newmacaddress')
@section('content')
<script>
function confirmDelete(delUrl) {
    if (confirm("คุณแน่ใจหรือว่าต้องการลบ")) {
        document.location = delUrl;
    }
}
</script>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
            <a class="navbar-brand" href="#pablo">MAC Address</a>
            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            @include('layouts.navbar')
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Mac Address</h4>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ session::get('success') }}
                            </div>
                            @endif
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Mac Address</th>
                                    <th>name</th>
                                </thead>
                                <tbody>
                                    @foreach($addmac as $ticket)
                                    <tr>
                                        <td>{{$ticket->id}}</td>
                                        <td>{{$ticket->addmac}}</td>
                                        <td>{{$ticket->name}}</td>
                                        <td><a class="btn btn-info" href="{{action('AddmacController@edit',$ticket->id)}}" role="button">Edit</a>
                                        &nbsp; &nbsp; <a class="btn btn-danger" onclick="return confirm('คุณแน่ใจหรือว่าต้องการลบ')" href="{{action('AddmacController@destroy',$ticket->id)}}" role="button">Delete</a>
                                           </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <a href="newmac" class="btn btn-info btn-fill pull-right" role="button" aria-pressed="true">New
                            MacAddress</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
@endsection