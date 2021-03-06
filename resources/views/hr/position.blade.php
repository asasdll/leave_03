@extends('layouts.app')
@include('layouts.manu.hr.manu_position')
@section('content')
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
            <a class="navbar-brand" href="pos">เพิ่มตำเเหน่ง</a>
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
    <div class="">
        <div class="">
            <div class="">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h5 class="alert alert-warning">กรุณาเพิ่มเฉพาะวหัวหน้าเเผนกเท่านั้น</h4>
                                <br>
                                <form class="form-inline  pull-right my-2 my-lg-0" method="get" action="{{'search'}}">
                                    <input class="form-control mr-sm-2" type="search" name="Search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
                                </form>
                        </div>
                        <div class="card-body table-full-dark table-responsive">
                            @if(\Session::has('successt'))
                            <p class="alert alert-danger" align='center'>{{\Session::get('successt')}}</p>
                            @endif
                            <div class="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-hover ">
                                            <thead>
                                                <th>ID</th>
                                                <th>ชื่อ</th>
                                                <th>นามสกุล</th>
                                                <th>ชื่อเล่น</th>
                                                <th>เพิ่มตำเเหน่ง</th>
                                            </thead>
                                            <div class="row">
                                                @foreach($status as $ticket)
                                                <tbody>
                                                    <tr>
                                                        <td>{{$ticket->id}}</td>
                                                        <td>{{$ticket->firstnamebem}}</td>
                                                        <td>{{$ticket->lastnamebem}}</td>
                                                        <td>{{$ticket->nickname}}</td>
                                                        <td><a class="btn btn-info btn-fill pull-right"
                                                                href="{{ route('AAA.show',$ticket->id) }}"
                                                                role="button">Add</a></td>
                                                    </tr>
                                                </tbody>
                                                @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php echo $status->links();?>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">หัวหน้าเเผนกเเล้วเเผนก</h4>
                                    <p class="card-category">หัวหน้าเเผนกเเล้วเเผนก</p>
                                </div>
                                <div class="">
                                    <table class="table">
                                        <thead>
                                            <th>ID</th>
                                            <th>ชื่อ</th>
                                            <th>นามสกุล</th>
                                            <th>ชื่อเล่น</th>
                                            <th>ตำเเหน่ง</th>
                                        </thead>
                                        @foreach($posed as $ticket2)
                                        <tbody>
                                            <tr>
                                                <td>{{$ticket2->id}}</td>
                                                <td>{{$ticket2->fname}}</td>
                                                <td>{{$ticket2->lname}}</td>
                                                <td>{{$ticket2->niname}}</td>
                                                <td>{{$ticket2->position}}</td>
                                                <td><a class="btn btn-info btn-fill pull-right"
                                                        href="{{ route('AAA.edit',$ticket2->id) }}"
                                                        role="button">Edit</a></td>
                                                <td>
                                                    <form method="post" class="delete_form"
                                                        action="{{action('PositionController@destroy',$ticket2->id)}}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE" />
                                                        <button type="submit"
                                                            onclick="return confirm('คุณแน่ใจหรือว่าต้องการลบ')"
                                                            class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <?php echo $status->links();?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
@endsection