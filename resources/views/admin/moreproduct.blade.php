<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 04-04-2021
 * Time: 20:03
 */
        ?>


@extends('admin.adminheader')
@section('body')
    @foreach($result as $value)

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
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Product - {{$value->prod_name}}</li>
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
            <p><tr ><td style="background-color: orange"colspan="7" align="center">Product Details</td></tr></p>
            <tr style="color:#d91a72">
                <th>Product Name</th>
                <th>Brand & Category </th>
                <th>Category</th>
                </tr>
            <tr>
                <td>{{$value->prod_name}}</td>
                <td>{{$value->cat_brand}}</td>
                <td>{{$value->name}}</td>
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
                            <p><tr ><td style="background-color: orange"colspan="7" align="center">Unit Measurements</td></tr></p>

                            <tr style="color:#d91a72">
                <th>weight</th>
                <th>height</th>
                <th>length</th>
                <th>width</th>
                <th>stock</th>
                {{--<th>Product image</th>--}}
                </tr>
            <tr>
                <td>{{$value->weight}}</td>
                <td>{{$value->height}}</td>
                <td>{{$value->length}}</td>
                <td>{{$value->width}}</td>
                <td>{{$value->stock}}</td>
                {{--<td>--}}
                    {{--<img src="{{asset('uploads/'.$value->image)}} " width="50" height="50"/>--}}

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
                            <p><tr ><td style="background-color: orange"colspan="7" align="center">More Details</td></tr></p>
            <tr style="color:#d91a72">
                <th>MRP</th>
                <th>Selling Price</th>
                {{--<th>GST</th>--}}
                <th>non_refund</th>
                <th>free_delivery</th>
                <th>Cash on Delivery</th>

                <th>Status description</th>
            </tr>
            <tr>
                <td>{{$value->MRP}}</td>
                <td>{{$value->sell_price}}</td>
{{--                <td>{{$value->GST}}</td>--}}

                @if($value->non_refund == 'on')
                    <td>Available</td>
                @else
                    <td>Not Available</td>
                @endif
                {{--                                            <td>{{$value1->free_delivery}}</td>--}}
                @if($value->free_delivery == 'on')
                    <td>Available</td>
                @else
                    <td>Not Available</td>
                @endif
                {{--<td>{{$value1->cod}}</td>--}}
                @if($value->cod == 'on')
                    <td>Available</td>
                @else
                    <td>Not Available</td>
                @endif

                <td>{{$value->reason}}</td>
            </tr>
        </table>
                    </div>
                </div>
            </div>

        <div class="col-sm-6">
            <div class="card">

                <div class="card-body">


                    <table  class="table">
                        <p><tr ><td style="background-color: orange"colspan="7" align="center">Description</td></tr></p>
                        <tr style="color:#d91a72">

                            <th>Description</th>
                            <th>warranty</th>
                        </tr>
                        <tr>
                            <td>{{$value->details}}</td>
                            @if($value->warranty == 0)
                                <td>No warranty</td>
                            @else
                                <td>{{$value->warranty}}</td>
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
                                                {{--<p><tr><td colspan="7" align="center"></td></tr></p>--}}
                                                <tr style="background-color: orange" >
                                                    <th colspan="4">Product images</th>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{asset('uploads/'.$value->image)}} " width="50" height="50"/>

                                                        {{--                        <a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                                                    </td>
                                                    <td>
                                                        <img src="{{asset('uploads/'.$value->image2)}} " width="50" height="50"/>

                                                        {{--                        <a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                                                    </td>
                                                    <td>
                                                        <img src="{{asset('uploads/'.$value->image3)}} " width="50" height="50"/>

                                                        {{--                        <a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                                                    </td>
                                                    <td>
                                                        <img src="{{asset('uploads/'.$value->image4)}} " width="50" height="50"/>

                                                        {{--                        <a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                                                    </td>

                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">

                            <div class="card-body">
                                <table  class="table">

                                    {{--<th>Action<//th>--}}

                                    {{--<th>Admin status</th>--}}
                                    {{--            @foreach($result as $value)--}}


                                    <tr >
                                            <td style="background-color: orange"colspan="7" align="center">Details</td></tr></p>
                                    <td><a href="/approveprod/{{$value->prod_id}}" class="btn btn-primary"> Approve</a></td>


                                    <form method="post" action="/disapproveprod/{{$value->prod_id}}">
                                        @csrf
                                        {{--<td style=" color: #d91a72">--}}
                                        {{--<input type="text" placeholder="Reason to reject" name="reason" id="reason">--}}
                                        {{--</td>--}}
                                        {{--<td  >  --}}
                                        {{--<input type="submit" class="btn btn-danger" value="Disapprove" ></td>--}}
                                        <td> <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Reason to reject" name="reason" id="reason">
                                                <div class="input-group-append">
                                                    <input  type="submit" class="btn btn-danger" value="Reject" >
                                                    {{--<button class="btn btn-outline-secondary" type="button">Button</button>--}}
                                                </div>
                                            </div></td>
                                    </form>

                                    {{--<a href="/disapproveprod/{{$value->prod_id}}"> Disapprove</a></td>--}}
                                    {{--<td><input type="text" value="Disapproved" > </td>--}}
                                    {{--@if($value->status == 1)--}}

                                    {{--<td>Completed</td>--}}

                                    {{--@else--}}

                                    {{--<td>Pending</td>--}}
                                    {{--@endif--}}





                                </table>

                            </div>
                        </div>
                    </div>
                    </div>
            </div>


    </div>
            <h5 style="color: #e90f92"><a href="/backp"> Back</a></h5>



        <!-- /.content -->

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
            </section>
    <!-- /.content-wrapper -->
    @endforeach

@endsection
