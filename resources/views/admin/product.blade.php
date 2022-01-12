<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 29-04-2021
 * Time: 22:31
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
                        <h1 style="color: #930974">Date based reports</h1>
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
        <table class="table">
            <form action="/getproduct" method="post" class="table" style="alignment: center" name="frm">
            @csrf
        <tr><td></td></tr>
        <tr>
            <td>  <input   type="date" name="from" ></td>

            <td> <input type="date" name="to"></td>
            <td> <input type="submit" value="Get" class="btn btn-primary"></td>
        </tr>
        <tr><td></td></tr>

</form>
        </table>
        <!-- Main content -->


        <table  class="table">
            {{--<p><tr><td colspan="7" align="center" ></td></tr></p>--}}
            <tr style="background-color: orange">
                <th>Product</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Address</th>
                <th>Date of order</th>
                <th> Order status</th>

                {{--<th>reject</th>--}}
            </tr>
            @foreach($result as $value)

                <tr style="background-color: lightgoldenrodyellow">
                    <td>{{$value->name}}</td>
                    <td>{{$value->quantity}}</td>

                    <td>{{$value->total}}</td>

                    <td>{{$value->address}}</td>
                    {{--<td></td>--}}
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
