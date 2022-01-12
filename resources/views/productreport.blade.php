<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 04-05-2021
 * Time: 11:16
 */
        ?>



@extends('vendorheader')
@section('body')
    @foreach($result as $value)


        {{--Approved--}}

        @if($value->adminstatus==1)
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="color: #930974">Order Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/vendordash">Home</a></li>
                            <li class="breadcrumb-item active">products</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->


        <table  class="table">
            {{--<p><tr><td colspan="7" align="center" ></td></tr></p>--}}
            <tr style="background-color: orange">
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Address</th>
                {{--<th> payment</th>--}}
                <th>Date</th>
                {{--<th>Approve order</th>--}}
                <th>Status of product </th>
                {{--<th>view customer</th>--}}

            </tr>
            @foreach($result1 as $value)

                <tr style="background-color: lightgoldenrodyellow">
                    <td>{{$value->name}}</td>
                    <td>{{$value->quantity}}</td>

                    <td>{{$value->total}}</td>

                    <td>{{$value->address}}</td>
                    <td>{{$value->date}}</td>

                    {{--<td> <a href="/approveorder/{{$value->buyid}}"> Approve</a>  </td>--}}
                    {{--<td style="color: deeppink">{{$value->reason}}</td>--}}
                    @if($value->status == 0)

                        <td>Pending </td>

                    @elseif($value->status == 1)

                        <td>Order Approved</td>
                    @elseif($value->status == 2)

                        <td>Product Shipped</td>
                    @elseif($value->status == 3)

                        <td>Delivered Successfully</td>
                    @elseif($value->status == 4)

                        <td style="color: red">Customer need to return </td>
                    @elseif($value->status == 6)

                        <td style="color: red">Order Cancelled </td>


                    @else

                        <td>Order Return Successfully</td>
                    @endif
                    {{--<td><a href="/viewproductdetails/{{$value->buyid}}">View </a></td>--}}
                </tr>


            @endforeach
        </table>

        <!-- /.content -->

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- /.content-wrapper -->

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