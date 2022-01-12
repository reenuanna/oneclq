<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 08-04-2021
 * Time: 10:42
 */
?>


@extends('vendorheader')
@section('body')
    @foreach($result1 as $value1)

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="color: deeppink"> Products Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/vendordash">Home</a></li>
                                <li class="breadcrumb-item active">Product - {{$value1->prod_name}}</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->

            </section>

            <!-- Main content -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">

                                <div class="card-body">

                                    <table  class="table">
                                        {{--<p><tr><td colspan="7" align="center"></td></tr></p>--}}
                                        <tr style="color:#d91a72">
                                            <th>Product Name</th>
                                            <th>Brand & Category </th>
                                            <th>Category</th>
                                        </tr>
                                        <tr>
                                            <td>{{$value1->prod_name}}</td>
                                            <td>{{$value1->cat_brand}}</td>
                                            <td>{{$value1->name}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{--<div class="row">--}}
                        <div class="col-sm-6">
                            <div class="card">

                                <div class="card-body">

                                    <table  class="table">
                                        {{--<p><tr><td colspan="7" align="center"></td></tr></p>--}}
                                        <tr style="color:#d91a72">
                                            <th>weight</th>
                                            <th>height</th>
                                            <th>length</th>
                                            <th>width</th>
                                            <th>stock</th>
                                            {{--<th>Product image</th>--}}
                                        </tr>
                                        <tr>
                                            <td>{{$value1->weight}}</td>
                                            <td>{{$value1->height}}</td>
                                            <td>{{$value1->length}}</td>
                                            <td>{{$value1->width}}</td>
                                            <td>{{$value1->stock}}</td>
                                            {{--<td>--}}
                                                {{--<img src="{{asset('uploads/'.$value1->image)}} " width="50" height="50"/>--}}

                                                {{--                        <a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                                            {{--</td>--}}
                                            {{--            <td>{{$value->image}}</td>--}}
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">

                                <div class="card-body">

                                    <table  class="table">
                                        {{--<p><tr><td colspan="7" align="center"></td></tr></p>--}}
                                        <tr style="color:#d91a72">
                                            <th>MRP</th>
                                            <th>Selling Price</th>
                                            <th>GST</th>
                                            <th>non_refund</th>
                                            <th>free_delivery</th>
                                            <th>Cash on Delivery</th>

                                        </tr>
                                        <tr>
                                            <td>{{$value1->MRP}}</td>
                                            <td>{{$value1->sell_price}}</td>
                                            <td>{{$value1->GST}}%</td>
                                            @if($value1->non_refund == 'on')
                                                <td>Available</td>
                                            @else
                                                <td>Not Available</td>
                                            @endif
                                            {{--                                            <td>{{$value1->free_delivery}}</td>--}}
                                            @if($value1->free_delivery == 'on')
                                                <td>Available</td>
                                            @else
                                                <td>Not Available</td>
                                            @endif
                                            {{--<td>{{$value1->cod}}</td>--}}
                                            @if($value1->cod == 'on')
                                                <td>Available</td>
                                            @else
                                                <td>Not Available</td>
                                            @endif

                                            {{--<td>{{$value1->non_refund}}</td>--}}
                                            {{--<td>{{$value1->free_delivery}}</td>--}}
                                            {{--<td>{{$value1->reason}}</td>--}}

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">

                                <div class="card-body">
                                    <table  class="table">
                                        <tr style="color:#d91a72">
                                            <th>product Description</th>
                                            <th>warranty</th>
                                        </tr>
                                        <tr>
                                            <td>{{$value1->details}}</td>
                                            @if($value1->warranty == 0)
                                                <td>No warranty</td>
                                            @else
                                                <td>{{$value1->warranty}}</td>
                                            @endif
                                        </tr>


                                    </table>


                                </div>            </div> </div>
                    </div>
                    <div class="row">

                    <div class="col-sm-6">
                        <div class="card">

                            <div class="card-body">

                                <table  class="table">
                                    <tr style="color:#d91a72">
                                        <th colspan="4">product images</th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{asset('uploads/'.$value1->image)}} " width="50" height="50"/>

                                            {{--                        <a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                                        </td>
                                        <td>
                                            <img src="{{asset('uploads/'.$value1->image2)}} " width="50" height="50"/>

                                            {{--                        <a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                                        </td>
                                        <td>
                                            <img src="{{asset('uploads/'.$value1->image3)}} " width="50" height="50"/>

                                            {{--                        <a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                                        </td>
                                        <td>
                                            <img src="{{asset('uploads/'.$value1->image4)}} " width="50" height="50"/>

                                            {{--                        <a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                                        </td>

                                    </tr>


                                </table>

                            </div>            </div> </div>

                    <div class="col-sm-6">
                        <div class="card">

                            <div class="card-body">

                                <table  class="table">
                                    <tr style="color:#d91a72">
                                        <th>product status</th>
                                        <th>Status description</th>
                                    </tr>
                                    <tr >

                                        {{--<td><a href="/approveprod/{{$value->prod_id}}"> Approve</a>--}}
                                        {{--<a href="/disapproveprod/{{$value->prod_id}}"> Disapprove</a></td>--}}
                                        @if($value1->status == 1)

                                            <td style="color: deeppink">Completed</td>

                                        @elseif($value1->status == 0)

                                            <td style="color: green"> Pending</td>
                                        @else
                                            <td style="color: red">Rejected</td>

                                        @endif

                                        <td>{{$value1->reason}}</td>


                                    </tr>


                                </table>

                            </div>            </div> </div>
                </div>
        </section>

        <!-- /.content-wrapper -->
    @endforeach
</div>
@endsection
