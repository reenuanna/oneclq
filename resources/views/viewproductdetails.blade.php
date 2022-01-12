<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 03-05-2021
 * Time: 19:44
 */
        ?>



@extends('vendorheader')
@section('body')

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

                <th>customer Name</th>
                <th>Product</th>
<th>Quantity</th>

                <th>Shipping Address </th>
<th>Payment details</th>

            </tr>
            @foreach($result6 as $value)

                <tr style="background-color: lightgoldenrodyellow">

                    <td>{{$value->username}}</td>
<td> <img src="{{asset('uploads/'.$value->image)}} " width="50" height="50"/>
    <img src="{{asset('uploads/'.$value->image2)}} " width="50" height="50"/>
    <img src="{{asset('uploads/'.$value->image2)}} " width="50" height="50"/>
    <img src="{{asset('uploads/'.$value->image2)}} " width="50" height="50"/>


</td>
                                        <td>{{$value->quantity}}</td>
                    <td>{{$value->address}}</td>
<td><a href="https://dashboard.razorpay.com/#/access/signin">Bank Account</a> </td>
                </tr>


            @endforeach
        </table>

        <!-- /.content -->

        <a href="/backorder">Back</a>
    </div>
    <!-- /.content-wrapper -->
@endsection
