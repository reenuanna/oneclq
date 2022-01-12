<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 04-05-2021
 * Time: 22:16
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
                        <h1 style="color: deeppink"> Product Based Report</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <table class="table">
            <tr>
                <form action="/searchprod" method="post">
                    @csrf
                    <td>  <input type="text" name="search" placeholder="Search..." required/>
                        <button type="submit" style="background-color: greenyellow" name="srch">Search</button></td>

                </form></tr>
        </table>

        <table  class="table">
            {{--<p><tr><td colspan="7" align="center" bgcolor="orange"></td></tr></p>--}}
            <tr style="background-color: orange">
                <th>Product Name</th>
                <th>Brand  </th>
                <th>Category</th>


                <th>MRP</th>

                <th>Selling Price</th>
                <th>Product image</th>

                <th>order status</th>
            </tr>
            @foreach($result1 as $value)

                <tr style="background-color: lightgoldenrodyellow">
                    <td>{{$value->prod_name}}</td>
                    <td>{{$value->cat_brand}}</td>
                    <td>{{$value->name}}</td>



                    <td>{{$value->MRP}}</td>
                    <td>{{$value->sell_price}}</td>

                    <td>
                        {{--<a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                        <img src="{{asset('uploads/'.$value->image)}} " width="50" height="50"/>
                        <img src="{{asset('uploads/'.$value->image2)}} " width="50" height="50"/>
                        <img src="{{asset('uploads/'.$value->image3)}} " width="50" height="50"/>
                        <img src="{{asset('uploads/'.$value->image4)}} " width="50" height="50"/>
                    </td>
                    {{--<td><a href="/moreproduct/{{$value->prod_id}}">Details</a> </td>--}}
                    {{--<td>--}}
                        {{--<a href="/deleteprod/{{$value->prod_id}}"> Delete</a>--}}
                    {{--<a href="/deleteprod/{{$value->prod_id}}"><i class="bi bi-trash-fill" style="background-color: red"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">--}}
                            {{--<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>--}}
                        {{--</svg>--}}
                        {{--<a class="btn btn-danger" href="/deletevprod/{{$value1->prod_id}}">--}}
                        {{--<i class="fa fa-trash-o fa-lg"></i> X--}}
                    {{--</a>                   </td>--}}
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

        {{--<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">--}}
            {{--<i class="fas fa-chevron-up"></i>--}}
        {{--</a>--}}
    </div>
    <!-- /.content-wrapper -->
@endsection
