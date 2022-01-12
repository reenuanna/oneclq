<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 30-03-2021
 * Time: 15:23
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
                        <h1>Products</h1>
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


        <table  class="table">
            <p><tr><td colspan="7" align="center"><b>Added Products</b></td></tr></p>
            <tr>
                <th>Product Name</th>
                <th>Brand & Category </th>
                <th>Category</th>
                <th>weight</th>
                <th>height</th>
                <th>length</th>
                <th>width</th>
                <th>stock</th>
                <th>Product image</th>
                <th>MRP</th>
                <th>Selling Price</th>
                <th>GST</th>
                <th>non_refund</th>
                <th>free_delivery</th>
                <th>Status</th>
                {{--<th>Disapprove</th>--}}
                {{--<th>Admin status</th>--}}
            </tr>
            @foreach($result as $value)

                <tr>
                    <td>{{$value->prod_name}}</td>
                    <td>{{$value->brand}}</td>
                    <td>{{$value->cat}}</td>
                    <td>{{$value->weight}}</td>
                    <td>{{$value->height}}</td>
                    <td>{{$value->length}}</td>
                    <td>{{$value->width}}</td>
                    <td>{{$value->stock}}</td>
                    <td>
                        <a href="{{ asset('uploads/'.$value->image) }}">Product image</a>
                    </td>
                    {{--            <td>{{$value->image}}</td>--}}
                    <td>{{$value->MRP}}</td>
                    <td>{{$value->sell_price}}</td>
                    <td>{{$value->GST}}</td>
                    <td>{{$value->non_refund}}</td>
                    <td>{{$value->free_delivery}}</td>
                    {{--<td>{{$value->status}}</td>--}}
                    <td><a href="/approveprod/{{$value->prod_id}}"> Approve</a>
                        <a href="/disapproveprod/{{$value->prod_id}}"> Disapprove</a></td>

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
