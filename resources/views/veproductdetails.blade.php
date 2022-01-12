<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 08-04-2021
 * Time: 10:56
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
                            <h1 style="color: deeppink">Products Details</h1>
                            <br/>
                            <a href="/editprod/{{$value1->prod_id}}" class="btn btn-secondary">Edit</a>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/vendordash">Home</a></li>
                                <li class="breadcrumb-item active">Products</li>
                                <li class="breadcrumb-item active">{{$value1->prod_name}}</li>

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
                                        <tr style="background-color: orange">
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
                        <div class="col-sm-6">
                            <div class="card">

                                <div class="card-body">

                                    <table  class="table">
                                        {{--<p><tr><td colspan="7" align="center"></td></tr></p>--}}
                                        <tr style="background-color: orange">
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
                                        <tr style="background-color: orange">
                                            <th>MRP</th>
                                            <th>Selling Price</th>
                                            {{--<th>GST</th>--}}
                                            <th>non_refund</th>
                                            <th>free_delivery</th>
                                            <th>Cash on delivery</th>
                                            <th>Warranty details</th>
                                        </tr>
                                        <tr>
                                            <td>{{$value1->MRP}}</td>
                                            <td>{{$value1->sell_price}}</td>
{{--                                            <td>{{$value1->GST}}</td>--}}
{{--                                            <td>{{$value1->non_refund}}</td>--}}

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
                                            @if($value1->warranty == 0)
                                                <td>No warranty</td>
                                            @else
                                                <td>{{$value1->warranty}}</td>
                                            @endif

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">

                                <div class="card-body">
                                    <table  class="table">
                                        {{--<p><tr><td colspan="7" align="center"></td></tr></p>--}}
                                        <tr style="background-color: orange">
                                            <th>Product Description</th>

                                        </tr>
                                        <tr>
                                            <td>{{$value1->details}}</td>

                                        </tr>
                                    </table>

                                </div>            </div> </div>
                    </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">

                                        <div class="card-body">
                                            <table  class="table">
                                                {{--<p><tr><td colspan="7" align="center"></td></tr></p>--}}
                                                <tr style="background-color: orange" >
                                                    <th colspan="4">Product images</th>

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



                                        </div>
                                    </div>
                                </div>



                {{--                    <td><a href="/moreproduct/{{$value->prod_id}}">Details</a> </td>--}}
                {{--<td> <a href="/deleteprod/{{$value->prod_id}}"> Delete</a></td>--}}




                            <div class="col-sm-6">
                                <div class="card">

                                    <div class="card-body">
                                        <table  class="table">
                                            <tr style="background-color: orange">
                                                <th>product status</th>
                                                <th>Status description</th>
                                            </tr>
                                            <tr >

                                                {{--<td><a href="/approveprod/{{$value->prod_id}}"> Approve</a>--}}
                                                {{--<a href="/disapproveprod/{{$value->prod_id}}"> Disapprove</a></td>--}}
                                                @if($value1->status == 1)

                                                    <td style="color: deeppink">Completed</td>

                                                @elseif($value1->status == 0)

                                                    <td>Admin verifying</td>
                                                @else
                                                    <td style="color: red">Product Rejected</td>

                                                @endif

                                                {{--                                            <td>{{$value1->reason}}</td>--}}
                                                @if($value1->reason == 'NULL')
                                                    <td style="color: green">Wait until admin verify</td>
                                                @else
                                                    <td>{{$value1->reason}}</td>
                                                @endif

                                            </tr>


                                        </table>


                                    </div>
                                </div>
                            </div>
                        </div></div></section>
            @endforeach
        </div>
                <h5 style="color: #e90f92"><a href="/backve"> Back</a></h5>

                <!-- /.content -->



                <!-- /.content-wrapper -->



@endsection
