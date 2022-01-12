<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 07-05-2021
 * Time: 13:24
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
                            <h1 style="color: deeppink">Offer Adding</h1>
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
                                            <th>Product image</th>
                                        </tr>
                                        <tr>
                                            <td>{{$value1->weight}}</td>
                                            <td>{{$value1->height}}</td>
                                            <td>{{$value1->length}}</td>
                                            <td>{{$value1->width}}</td>
                                            <td>{{$value1->stock}}</td>
                                            <td>
                                                <img src="{{asset('uploads/'.$value1->image)}} " width="50" height="50"/>

                                                {{--                        <a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                                            </td>
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
                                            <th>GST</th>
                                            <th>non_refund</th>
                                            <th>free_delivery</th>
                                            {{--<th>Status description</th>--}}
                                        </tr>
                                        <tr>
                                            <td>{{$value1->MRP}}</td>
                                            <td>{{$value1->sell_price}}</td>
                                            <td>{{$value1->GST}}</td>
                                            <td>{{$value1->non_refund}}</td>
                                            <td>{{$value1->free_delivery}}</td>
                                            {{--                                            <td>{{$value1->reason}}</td>--}}
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

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

                                                <td>Completed</td>

                                            @elseif($value1->status == 0)

                                                <td>Pending</td>
                                            @else
                                                <td style="color: red">Rejected</td>

                                            @endif

                                            <td>{{$value1->reason}}</td>


                                        </tr>


                                    </table>

                                </div>            </div> </div>
                    </div>

                </div>
                {{--                    <td><a href="/moreproduct/{{$value->prod_id}}">Details</a> </td>--}}
                {{--<td> <a href="/deleteprod/{{$value->prod_id}}"> Delete</a></td>--}}


                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body">

                            <table  class="table">
                                <tr style="background-color: dodgerblue">
                                    <th>Current offer </th>
                                    <th>Add offer</th>
                                    <th>Add</th>
                                    <th>Offer Removal</th>
                                </tr>
                                <tr>
                            <form name="frm" method="post" action="/addoffers/{{$value1->prod_id}}">
                                @csrf
                               <td> @if($value1->offer=='%')
                                    No Off
                                    <input type="hidden" name="m" id="m" value="{{$value1->offer}}">
                                @elseif($value1->offer=='NULL')
                                       No Off
                                    <input type="hidden" name="m" id="m" value="{{$value1->offer}}">
                                @elseif($value1->offer== 0)
                                       No Off
                                    <input type="hidden" name="m" id="m" value="{{$value1->offer}}">
                                @else
                                    {{$value1->offer}}
                                    <input type="hidden" name="m" id="m" value="{{$value1->offer}}">%
                                @endif
                               </td>
                                <td>                                   <input type="text" name="offer" placeholder="Don't put %" value="{{$value1->offer}}">

                                <input type="text" class="form-control-plaintext"  readonly placeholder="Don't put %" value="Don't use % symbol"></td>
                                <td><input type="submit" name="add" class="btn btn-primary" value="Add"></td>

                                            <td><a href="/deleteoffer/{{$value1->prod_id}}" class="btn btn-danger" name="Withdraw" value="Withdraw">Withdraw</a></td>
                                                {{--<a hidden="/deleteoffer/{{$value1->prod_id}}"> Withdraw</a></td>--}}
                            </form>
                                </tr>


                            </table>

                        </div>
                    </div>
                </div>
                @endforeach

            </section>
        </div>



                <h5 style="color: #e90f92"><a href="/backve"> Back</a></h5>

                <!-- /.content -->



                <!-- /.content-wrapper -->

        </div>
@endsection
