<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 07-04-2021
 * Time: 14:06
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
            <p><tr><td colspan="7" align="center"></td></tr></p>
            <tr style="background-color: orange">
                <th>Product Name</th>
                <th>Brand & Category </th>
                <th>Category</th>
                <th>More</th>


                <th>Product status</th>
                <th>Status Description</th>
            </tr>
            @foreach($result as $value)

                <tr style="background-color: lightgoldenrodyellow">
                    <td>{{$value->prod_name}}</td>
                    <td>{{$value->cat_brand}}</td>
                    <td>{{$value->name}}</td>
                    <td><a href="/moreproductvend/{{$value->prod_id}}">Details</a> </td>

                    {{--<td>--}}
    @if($value->status == 1)

    <td style="color:green">Approved</td>
@elseif($value->status == 0)
                        <td>Pending</td>

                    @else

    <td style="color: red">Rejected</td>
    @endif


<td>{{$value->reason}}</td>

                </tr>


            @endforeach
        </table>
        <h5 style="color: #e90f92"><a href="/backvprod"> Back</a></h5>

        <!-- /.content -->

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- /.content-wrapper -->
@endsection
