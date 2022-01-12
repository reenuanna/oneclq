<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 30-03-2021
 * Time: 14:50
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
                    <h1 style="color: deeppink">Added Products</h1>
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
        {{--<p><tr><td colspan="7" align="center" bgcolor="orange"></td></tr></p>--}}
        <tr style="background-color: orange">
            <th>Product Name</th>
            <th>Brand & Category </th>
            <th>Category</th>
            {{--<th>weight</th>--}}
            {{--<th>height</th>--}}
            {{--<th>length</th>--}}
            {{--<th>width</th>--}}
            {{--<th>stock</th>--}}
            <th>Product image</th>
            {{--<th>MRP</th>--}}
            {{--<th>Selling Price</th>--}}
            {{--<th>GST</th>--}}
            {{--<th>non_refund</th>--}}
            {{--<th>free_delivery</th>--}}
            <th>Product Status</th>
            {{--<th>Status</th>--}}
            <th>More Details </th>

            <th>Product Withdraw</th>
            <th>Delete</th>

        </tr>
        @foreach($result1 as $value)

        <tr style="background-color: lightgoldenrodyellow">
            <td>{{$value->prod_name}}</td>
            <td>{{$value->cat_brand}}</td>
            <td>{{$value->name}}</td>
            {{--<td>{{$value->weight}}</td>--}}
            {{--<td>{{$value->height}}</td>--}}
            {{--<td>{{$value->length}}</td>--}}
            {{--<td>{{$value->width}}</td>--}}
            {{--<td>{{$value->stock}}</td>--}}
            <td>
            {{--<a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                <img src="{{asset('uploads/'.$value->image)}} " width="50" height="50"/>
                <img src="{{asset('uploads/'.$value->image2)}} " width="50" height="50"/>
                <img src="{{asset('uploads/'.$value->image3)}} " width="50" height="50"/>
                <img src="{{asset('uploads/'.$value->image4)}} " width="50" height="50"/>            </td>
{{--            <td>{{$value->image}}</td>--}}
            {{--<td>{{$value->MRP}}</td>--}}
            {{--<td>{{$value->sell_price}}</td>--}}
            {{--<td>{{$value->GST}}</td>--}}
            {{--<td>{{$value->non_refund}}</td>--}}
            {{--<td>{{$value->free_delivery}}</td>--}}
            {{--<td><a href="/approveprod/{{$value->prod_id}}"> Approve</a>--}}
                {{--<a href="/disapproveprod/{{$value->prod_id}}"> Disapprove</a></td>--}}
            @if($value->status == 1)

                <td style="color: deeppink">Approved</td>

            @elseif($value->status == 0)

                <td style="color: green">Pending</td>
                @else
                <td style="color: red">Rejected</td>

            @endif

<td><a href="/moreproduct/{{$value->prod_id}}">Details</a> </td>

            <td> <a href="/withdrawprod/{{$value->prod_id}}"class="btn btn-light btn-sm">withdraw</a></td>
            <td> <a href="/deleteprod/{{$value->prod_id}}"class="btn btn-danger btn-sm">X</a></td>

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
