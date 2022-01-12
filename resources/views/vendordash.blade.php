<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 26-03-2021
 * Time: 12:25
 */
        ?>

@extends('vendorheader')
@section('body')
    @foreach($result as $value)


        {{--Approved--}}

        @if($value->adminstatus==1)


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        {{--style="background-color: #90CCF4">--}}
        <!-- Content Header (Page header) -->
        <div class="content-header" >
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{$value->storename}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Vendor </li>
                       <li class="breadcrumb-item active">

                            {{$value->name}}

                       </li>
                            <li class="breadcrumb-item active"><a href="/logoutv"> Logout</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-sm-4">
                        <div >
                            <img src="{{asset('uploads/'.$value->logo)}} " width="50%" height="10%"/>
                            {{--<img src="dist/img/welcome.jpg" width="100%" height="100%">--}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->

                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$pcount}}</h3>

                                <p>Products</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/productadd" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$catcount}}</h3>

                                <p>Categories</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/vendorcat" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div><br><br/></div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$approvecount}}</h3>

                                <p>Approved Products</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/productapprove" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$countdisapprove}}</h3>

                                <p>Disapproved Products</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="/productdisapprove" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$countpending}}</h3>

                                <p>Pending Products</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="/pendingproduct" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$buycount}}</h3>

                                <p>Orders Arrive</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="/productsignin/{{$value->id}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- ./col -->
            </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

                        {{--Pending--}}

    @elseif($value->adminstatus==0)
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/vendordash">Home</a></li>
                            <li class="breadcrumb-item active">Vendor - Pending </li>
                            <li class="breadcrumb-item active">

                                {{$value->name}}

                            </li>
                            <li class="breadcrumb-item active"><a href="/logoutv"> Logout</a></li>

                            {{--<li class="breadcrumb-item active"> </li>--}}

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <h1 style="color: #FF0000">Request still Processing</h1>
                    </div>
                </div>

        </section>
        {{--<h6>Dashboard will visible only after get approval of ADMIN</h6>--}}
    </div>

              {{--Rejected--}}

        @else



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/vendordash">Home</a></li>
                            <li class="breadcrumb-item active"><a href="/vendordash"> Vendor </a></li>
                            <li class="breadcrumb-item active">

                                <a href="/profile"> {{$value->name}}</a> /  Rejected

                            </li>
                            <li class="breadcrumb-item active"><a href="/logoutv"> Logout</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                  <h4 style="color: #ee3148">  Reason to Reject :</h4>
                  <h3 style="color: #f236c8">  {{$value->reason}}</h3>
                    </div>
                <div class="row">
                    <hr/>
                    <br/>
                    <br/><br/>

                    <h3 style="color: red">Contact Admin - 9207477128 </h3>
                </div>
            </div>
        </section>
    </div>
@endif
    @endforeach
@endsection
