<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 29-04-2021
 * Time: 22:47
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
                <th>Product</th>
                <th>quantity</th>
                <th>Total</th>
                {{--<th>address</th>--}}
                {{--<th> payment</th>--}}
                <th>date</th>
                <th>Approve order</th>
                <th>Status of product </th>
                <th>view customer</th>

            </tr>
            @foreach($result1 as $value)

                <tr style="background-color: lightgoldenrodyellow">
                    <td>{{$value->name}}</td>
                    <td>{{$value->quantity}}</td>

                    <td>{{$value->total}}</td>

                    {{--<td>{{$value->address}}</td>--}}
                    <td>{{$value->date}}</td>

                    <td> <a href="/approveorder/{{$value->buyid}}"> Approve</a>  </td>
                    <td>{{$value->reason}}</td>

                    <td><a href="/viewproductdetails/{{$value->buyid}}">View </a></td>
                </tr>


            @endforeach
        </table>

        <!-- /.content -->

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- /.content-wrapper -->
@endsection
