@extends('layouts.app')
@include('layouts.manu.chief.manu_leave')
@section('content')
 
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="newcompany"> ผู้ใช้งาน </a>
                    @include('layouts.navbar')
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">การอนุมัติ</h4>
                                </div>
                                <div class="card-body">
                                  <form method="POST" action="{{action('Leave_chiefController@update', $id)}}"  enctype="multipart/form-data">
                                        @csrf
                                      <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">การอนุมัติ</label>
                                                <div class="col-md-10">
                                                <select class="form-control" id="exampleFormControlSelect2" name="status_chief">
                                                    <option  value="อนุมัติ">อนุมัติ</option>
                                                    <option  value="ไม่อนุมัติ">ไม่อนุมัติ</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">หมายเหตุ</label>
                                                <div class="col-md-10">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"  name="status_text1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">บันทึกข้อมูล</button>
                                    <input type="hidden" name="_method" value="PATCH" />
                                    </form>
                                </div>
                              </div>
                            </div>
                        <div class="col-md-4  pl-1">
                        <div class="card card-user">
                                <div class="card-image">
                                    <img src="{{ URL::to('/') }}/public/img/imgback/large_4.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="{{ URL::to('/') }}/public/img/profile/w644.jpg" alt="...">
                                            <h5 class="title">Mike Andrew</h5>
                                        </a>
                                        <p class="description">
                                            michael24
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        Employee Time Management
                                        <br>online leave system,Time
                                        <br> leave,sick leave,Personal
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    <!--   -->
    @endsection