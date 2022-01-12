<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 24-03-2021
 * Time: 19:44
 */
        ?>
@extends('admin.adminheader')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            {{--<li class="breadcrumb-item active">Home Page v1</li>--}}
                            <li class="breadcrumb-item active"><a href="/logout"> Logout</a></li>

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
                    <div class="col-sm-6">
                        {{--<div class="small-box">--}}
                            <img src="dist/img/logo.png" width="50%" height="80%"><b>Onecliq</b><br/>
                      <b style="color: green"> <i> Best Online Shopping In India | Kerala Shopping | Regional</i></b><br/>
                        {{--</div>--}}
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">

                                <h3>{{$vcount}}</h3>

                                <p>Vendors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/adminvendor" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$pcount}}
                                </h3>

                                <p>All Products</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/productdetails" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                {{--<div class="row">--}}
                    {{--<div class="col-lg-3 col-6">--}}
                        {{--<!-- small box -->--}}
                        {{--<div class="small-box bg-info">--}}
                            {{--<div class="inner">--}}
                                {{--<h3>{{$pcount}}</h3>--}}

                                {{--<p>All Products </p>--}}
                            {{--</div>--}}
                            {{--<div class="icon">--}}
                                {{--<i class="ion ion-bag"></i>--}}
                            {{--</div>--}}
                            {{--<a href="/productdetails " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ./col -->--}}
                    {{--<div class="col-lg-3 col-6">--}}
                        {{--<!-- small box -->--}}
                        {{--<div class="small-box bg-success">--}}
                            {{--<div class="inner">--}}
                                {{--<h3>{{$bcount}} </h3>--}}

                                {{--<p>Business Type</p>--}}
                            {{--</div>--}}
                            {{--<div class="icon">--}}
                                {{--<i class="ion ion-stats-bars"></i>--}}
                            {{--</div>--}}
                            {{--<a href="/businesstype" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ./col -->--}}
                    {{--<div class="col-lg-3 col-6">--}}
                        {{--<!-- small box -->--}}
                        {{--<div class="small-box bg-warning">--}}
                            {{--<div class="inner">--}}
                                {{--<h3>{{$catcount}}</h3>--}}

                                {{--<p> Categories</p>--}}
                            {{--</div>--}}
                            {{--<div class="icon">--}}
                                {{--<i class="ion ion-person-add"></i>--}}
                            {{--</div>--}}
                            {{--<a href="/showcategory" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
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
                            <a href="/adminproductapprove" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                            <a href="/adminproductdisapprove" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                            <a href="/adminpendingproduct" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$buycount}}</h3>

                                <p>Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="/productbased" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
