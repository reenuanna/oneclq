<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 07-04-2021
 * Time: 13:46
 */

?>
@extends('admin.adminheader')
@section('body')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="color: deeppink"></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Vendor based Products </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        {{--<div class="row">--}}
            {{--<div class="col-sm-6">--}}
                {{--<div class="small-box">--}}
                    {{--<img src="dist/img/welcome.jpg" width="100%" height="100%">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3 col-6">--}}
                <!-- small box -->
                {{--<div class="small-box bg-info">--}}
                    {{--<div class="inner">--}}

                        {{--<h3>$</h3>--}}

                        {{--<p>Vendors</p>--}}

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-sm-6">
                        <div align="center">
                            <br>

                        <center>
                                               <table class="table" align="center">
                            <thead class="table-warning">
        {{--<table  class="table no border" align="center">--}}
            {{--<p><tr><td colspan="7" align="center"></td></tr></p>--}}
            <tr style="background-color: orange">
                <th>Vendor based products</th>
                </thead>
                {{--<th>Category</th>--}}

                {{--<th>Product status</th>--}}
                {{--<th>Product  </th>--}}

                {{--<th>Admin message</th>--}}

            </tr>
                                                   </table>

                            <table class="table" align="center">
                                <tr>
            @foreach($result as $value)

                <tr style="background-color: whitesmoke">
                    <td style="color: deeppink" bgcolor="lightgoldenrodyellow" ><a href="/vendorproduct/{{$value->id}}">
                        {{$value->name}}</td></a>
{{--                    <td>{{$value->brand}}</td>--}}
                    {{--<td>{{$value->categories}}</td>--}}
                    {{--@if($value->adminstatus == 1)--}}

                        {{--<td>Completed</td>--}}

                    {{--@else--}}

                        {{--<td>Pending</td>--}}
                    {{--@endif--}}

                {{--@foreach($result1 as $value1)--}}

                    {{--@endforeach--}}
{{--                    <td>{{$value1->prod_name}}</td>--}}
            @endforeach
                </tr>


                        </table>
                        </center>
                    </div>
                    </div>
                    </div>
                </div>
            </section>
        <!-- /.content -->

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- /.content-wrapper -->
@endsection
