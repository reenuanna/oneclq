<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 29-03-2021
 * Time: 14:04
 */
        ?>
@extends('vendorheader')

@section('body');

        @foreach($result as $value)
@if($value->adminstatus==1)

        <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                        <div class="container-fluid">
                                <div class="row mb-2">
                                        <div class="col-sm-6">
                                                <h1 style="color: deeppink">Add products</h1>
                                        </div>
                                        <div class="col-sm-12">
                                                <ol class="breadcrumb float-sm-right">
                                                        <li class="breadcrumb-item"><a href="/vendordash">Home</a></li>
                                                        <li class="breadcrumb-item active"> {{$value->name}}</li>
                                                </ol>
                                        </div>
                                </div>
                        </div><!-- /.container-fluid -->
                </section>

                <section class="content">
                        <div class="container-fluid">
                                <div class="row">
                                        <div class="col-sm-6">
                                                <div class="card">
                                                        <div class="card-header">
                                                                {{--<h3 class="card-title">COMPANY DETAILS</h3>--}}
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                                {{--<table class="table table-bordered" >--}}
                                 <table class="table" style="background-color: thistle">
                                                        {{--<table class="table" align="center">--}}
                                                        {{--<a href="/addproduct/{{session('sessid')}}" >Add Product</a>--}}
                                                        {{--</table>--}}
                                                        {{--<table class="table "  >--}}
                                    <thead>

                                                                <tr style="background-color: thistle ">
                                  <th colspan="2" bgcolor="#f0f8ff"><a href="/viewproduct" >Add Product</a></th>

                                                                </tr>
                                                                </thead>

                                                                <tbody>

                                                                <tr><td>
                                                                        </td>
                                                                <td>  </td></tr>
                                                                <tr>

                                                                </tr>
                                                                </tbody>
                                                                                </table>
                                                        </div>
                                                </div>
                                        </div>



                                        <div class="col-sm-6">
                                                <div class="card">
                                                        {{--<div class="card-header">--}}
                                                                {{--<h3 class="card-title"> </h3>--}}
                                                        {{--</div>--}}
                                                        <!-- /.card-header -->
                                                        <div class="card-body">

                                                        <table class="table">
                                                                <tr>


                                                                    {{--<td>1.</td>--}}
                                                                        <td>Added  categories - </td>
{{--                                                                    <td> {{$value->$id}}</td>--}}
                                                                    @foreach($result2 as $value2)
                                                                        {{--<br/>--}}
                                                                        <td >   {{$value2->cat_brand}} </td>
                                                                        @endforeach
                                                                </tr>
                                                        </table>

                                                        </div>
                                                </div>

                                        </div>
                                        </div>
                                <h3 style="color: mediumvioletred">All Products</h3>
                                        <div class="row">
                                                <div class="col-sm-12">
                                                        <div class="card">
                                                                <div class="card-header">
                                                                        {{--<h3 class="card-title" >BUSINESS DETAILS</h3>--}}
                                                                </div>
                                                                <!-- /.card-header -->
                                                                <div class="card-body">

                                                                        <table class="table">

                                                                            <tr>
                                                                        <th>Products</th>
                                                                            <th>MRP</th>
                                                                            <th>Selling Price</th>
                                                                            <th>Stock</th>
                                                                                <th>Status</th>
                                                                            <th>Reason</th>

                                                                            <th>Offer </th>
                                                                            <th>Delete</th>
                                                                            <th>Withdraw</th>

                                                                        </tr>

                                                                                @foreach($result1 as $value1)
{{--                                                                                        @if($value1->status==1)--}}
                                                                        <tr>
                                                                                <td style="color: darkviolet">
                                                                                    <a href="/veproductdetails/{{$value1->prod_id}}"> <img src="{{asset('uploads/'.$value1->image)}} " width="100" height="100"/></a>
                                                                                        <br/>
                                                                               {{$value1->prod_name}}</td>
                                                                            <td>{{$value1->MRP}}</td>
                                                                            <td>{{$value1->sell_price}}</td>
                                                                            <td>{{$value1->stock}}</td>



                                                                                        @if($value1->status==1)
                                                                                        <td style="color: deeppink">
                                                                                                Approved
                                                                                </td>
                                                                                                @elseif($value1->status==0)
                                                                                <td style="color:green">Processing</td>
                                                                                                @else
                                                                                <td style="color:red">Rejected</td>
                                                                                        @endif
                                                                            <td>{{$value1->reason}}</td>
                                                                          <td> <a href="/addoffer/{{$value1->prod_id}}"> <i class="bi bi-align-middle"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-align-middle" viewBox="0 0 16 16">
                                                                                <path d="M6 13a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v10zM1 8a.5.5 0 0 0 .5.5H6v-1H1.5A.5.5 0 0 0 1 8zm14 0a.5.5 0 0 1-.5.5H10v-1h4.5a.5.5 0 0 1 .5.5z"/>
                                                                            </svg></a>
                                                                            {{--<td style="color: green"><a href="/addoffer/{{$value1->prod_id}}">add</a>  <br/>  <br/>--}}

                                                                              <a href="/deleteoffer/{{$value1->prod_id}}">    <i class="bi bi-scissors"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-scissors" viewBox="0 0 16 16">
                                                                                      <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61 3.5 3.5zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                                                                                  </svg> </a>
                                                                              <br/>
                                                                              <br/>
                                                                              {{$value1->offer}} %</td>
                                                                            {{--<a href="/deleteoffer/{{$value1->prod_id}}" class="btn btn-danger" name="Withdraw" value="Withdraw">Withdraw</a></td>--}}

                                                                            <td>
                                                                                <a href="/deletevprod/{{$value1->prod_id}}"><i class="bi bi-trash-fill" style="background-color: red"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                                                    </svg>
                                                                                {{--<a class="btn btn-danger" href="/deletevprod/{{$value1->prod_id}}">--}}
                                                                                     {{--<i class="fa fa-trash-o fa-lg"></i> X--}}
                                                                                </a>
                                                                            <td> <a href="/withdrawprodv/{{$value1->prod_id}}"class="btn btn-light btn-sm">withdraw</a></td>

                                                                                 {{--<a href="/deletevprod/{{$value1->prod_id}}" class="btn btn-danger btn-sm">X</a>--}}
                                                                             </td>
                                                                        </tr>

                                                                                @endforeach
                                                                </table>
                                                        {{$result1->links()}}

                                                </div>


                                                {{--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}

                                                </div>

                                                </div>
                                                </div>
                                </div>




</section>
                </div>
    {{--@endforeach--}}
        {{--@foreach($result as $value)--}}









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
                                                                <li class="breadcrumb-item active">Vendor / Pending </li>
                                                                <li class="breadcrumb-item active">

                                                                        {{$value->name}}

                                                                </li>
                                                        </ol>
                                                </div><!-- /.col -->
                                        </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                        </div>
                        <section class="content">
                                <div class="container-fluid">
                                        <!-- Small boxes (Stat box) -->
                                        <div class="row">
                                                <h1 style="color: limegreen">Registration process is pending</h1>
                                        </div>
                                </div>
                        </section>
                </div>
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
                                                                <li class="breadcrumb-item active">Vendor / Rejected </li>
                                                                <li class="breadcrumb-item active">

                                                                        {{$value->name}}

                                                                </li>
                                                        </ol>
                                                </div><!-- /.col -->
                                        </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                        </div>
                        <section class="content">
                                <div class="container-fluid">
                                        <!-- Small boxes (Stat box) -->
                                        <div class="row">
                                                <h1 style="color: red">Contact Admin - 9207477128 </h1>
                                        </div>
                                </div>
                        </section>
                </div>

        @endif
        @endforeach
@endsection