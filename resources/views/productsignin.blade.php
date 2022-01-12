<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 04-05-2021
 * Time: 19:53
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
                {{--<th>quantity</th>--}}
                {{--<th>Price total</th>--}}
                <th> payment</th>

                <th>Amount Receive</th>
                <th>date</th>
                <th>Approve order</th>
                <th>Status of product </th>
                <th>view customer</th>

            </tr>
            @foreach($result1 as $value1)

                <tr style="background-color: lightgoldenrodyellow">
                    <td>{{$value1->prod_name}}</td>
                    <td>{{$value1->method}}</td>


                    <td style="color: green">{{$value1->offerprice}}</td>
                    <td>{{$value1->date}}</td>

                    <td>&nbsp;&nbsp;
                        <a href="/approveorder/{{$value1->buyid}}" ><i class="bi bi-bag-check"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="/approveship/{{$value1->buyid}}" >     <i class="bi bi-cart-check-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg></a>
                        &nbsp;&nbsp;&nbsp;
                            <a href="/approvedeliver/{{$value1->buyid}}" >    <i class="bi bi-calendar-check"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="/approvereturn/{{$value1->buyid}}" >
                            <i class="bi bi-x-circle"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                    </td>
                    @if($value1->buystatus == 0)

                        <td>Pending</td>

                    @elseif($value1->buystatus == 1)

                        <td>Order Approved</td>
                    @elseif($value1->buystatus == 2)

                        <td>Product Shipped</td>
                    @elseif($value1->buystatus == 3)

                        <td>Delivered Successfully</td>
                    @elseif($value1->buystatus == 4)

                        <td style="color: red">Customer need to return </td>
                    @elseif($value1->buystatus == 6)

                        <td style="color: red">Order Cancelled </td>


                    @else

                        <td>Order Return Successfully</td>

                    @endif
                    <td><a href="/viewproductdetails/{{$value1->buyid}}">View </a></td>
                </tr>
            @endforeach
        </table>

        <!-- /.content -->


    </div>

@endsection
