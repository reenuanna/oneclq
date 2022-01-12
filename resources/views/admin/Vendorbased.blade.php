<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 04-05-2021
 * Time: 22:24
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
                        <h1 style="color: #930974">Vendorbased reports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">products</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->

        <table class="table">
            <tr>
                <form action="/searchvend" method="post">
                    @csrf
                    <td>  <input type="text" name="search" placeholder="Search..." required/>
                        <button type="submit" class="btn btn-success" name="srch">Search</button></td>

                </form></tr>
        </table>
        <table  class="table">
            {{--<p><tr><td colspan="7" align="center" ></td></tr></p>--}}
            <tr style="background-color: orange">
                <th>vendor</th>
                <th>Store name</th>
                {{--<th>email</th>--}}
                <th>Mobile</th>
                <th>Product</th>


                <th> Amount received</th>
                <th>Date of order</th>
                <th>status</th>
            </tr>
            @foreach($result as $value)

                <tr style="background-color: lightgoldenrodyellow">
                    <td>{{$value->name}}</td>
                    <td>{{$value->storename}}</td>
{{--                    <td>{{$value->email}}</td>--}}
                    <td>{{$value->mobile}}</td>
                    <td>{{$value->prod_name}}</td>

{{--                    <td>{{$value->username}}</td>--}}


                    <td>{{$value->total}}</td>
                    <td>{{$value->date}}</td>

                        @if($value->status == 0)

                    <td>Pending</td>

                    @elseif($value->status == 1)

                        <td>Order Approved</td>
                    @elseif($value->status == 2)

                        <td>Product Shipped</td>
                    @elseif($value->status == 3)

                        <td>Delivered Successfully</td>
                    @else
                        <td style="color: red">Rejected</td>

                    @endif
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
