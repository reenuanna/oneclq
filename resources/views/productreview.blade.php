<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 04-06-2021
 * Time: 22:51
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
                            <h1 style="color: deeppink">Review of products</h1>
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






                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    {{--<h3 class="card-title" >BUSINESS DETAILS</h3>--}}
                                </div>
                                <!-- /.card-header -->


                                    <table class="table">
                                        <tr>
                                            <th>Products</th>

                                            <th>Review</th>
                                            <th>Rating</th>
                                        </tr>

                                        @foreach($result1 as $value1)
                                            {{--                                                                                        @if($value1->status==1)--}}
                                            <tr>
                                                <td style="color: darkviolet">
                                                    <a href="/veproductdetails/{{$value1->prod_id}}"> <img src="{{asset('uploads/'.$value1->image)}} " width="100" height="100"/></a>
                                                    <br/>
                                                    {{$value1->prod_name}}</td>


                                        @endforeach

                                        @foreach($result3 as $value3)
                                            <td>{{$value3->username}}- {{$value3->comment}}</td>
                                            <td>4</td>
                                            </tr>
                                        @endforeach

                                    </table>


                                </div>


                                {{--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}

                            </div>

                        </div>
                    </div>
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