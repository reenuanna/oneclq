<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 10-05-2021
 * Time: 22:38
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
                            {{--<a href="/editprod/{{$value1->prod_id}}">Edit</a>--}}
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
            <form name="updateprod" method="post" action="/updateprod/{{$value1->prod_id}}" enctype="multipart/form-data">
                @csrf
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
                                            <td><input type="text" name="prod_name" value="{{$value1->prod_name}}"></td>

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
                                            <td><input type="text"  name="weight" style="width: 30px" value="{{$value1->weight}}"></td>
                                            <td><input type="text"  name="height" style="width: 30px" value="{{$value1->height}}"></td>
                                            <td><input type="text"  name="length" style="width: 30px" value="{{$value1->length}}"></td>
                                            <td><input type="text"  name="width" style="width: 30px" value="{{$value1->width}}"></td>
                                            <td><input type="text"  name="stock"  style="width: 30px" value="{{$value1->stock}}"></td>

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
                                            <th>Cash on Delivery</th>
                                            <th>Warranty details</th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="MRP"  style="width: 30px" value="{{$value1->MRP}}"></td>
                                            <td><input type="text" name="sell_price"  style="width: 30px" value="{{$value1->sell_price}}"></td>
                                            {{--<td><input type="text" name="GST" style="width: 30px" value="{{$value1->GST}}"></td>--}}

                                            @if($value1->non_refund == 'on')
                                                <td><input type="checkbox" name="non_refund" checked  value="{{$value1->non_refund}}"></td>
                                                @else
                                                <td><input type="checkbox" name="non_refund"   value="{{$value1->non_refund}}"></td>
                                                @endif
                                            @if($value1->free_delivery == 'on')
                                                <td><input type="checkbox"  name="free_delivery" checked value="{{$value1->free_delivery}}"></td>
                                                @else
                                                <td><input type="checkbox"  name="free_delivery"  value="{{$value1->free_delivery}}"></td>
                                                @endif

                                            @if($value1->cod == 'on')
                                                <td><input type="checkbox"  name="cod" checked value="{{$value1->cod}}"></td>
                                                @else
                                                <td><input type="checkbox"  name="cod"  value="{{$value1->cod}}"></td>
                                                @endif

                                                <td>                                 <input type="text" class="form-control" name="warranty" value="{{$value1->warranty}}" id="warranty" placeholder="warranty details :">
                                                </td>

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
                                        {{--<p><tr><td colspan="7" align="center"></td></tr></p>--}}
                                        <tr style="background-color: orange">
                                            <th>Product Description</th>

                                        </tr>
                                        <tr>
                                          <td>  <input type="text" class="form-control" name="details" id="details" value="{{$value1->details}}">
                                          </td>
                                        </tr>
                                    </table>


                                </div>                         </div>   </div>
</div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">

                                                <div class="card-body">

                                                    <table  class="table">
                                                        {{--<p><tr><td colspan="7" align="center"></td></tr></p>--}}
                                                        <tr style="background-color: orange">
                                                            <th colspan="4">Product Images</th>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="file"  class="form-control"  name="image" alt="product image">
                                                                <img src="{{asset('uploads/'.$value1->image)}} "  name="image" width="50" height="50"/>
                                                            </td><td>

                                                            <input type="file"  class="form-control"  name="image2" alt="product image">

                                                                <img src="{{asset('uploads/'.$value1->image2)}} "  name="image2" width="50" height="50"/>
                                                            </td><td>

                                                            <input type="file"  class="form-control"  name="image3" alt="product image">

                                                                <img src="{{asset('uploads/'.$value1->image3)}} "  name="image3" width="50" height="50"/>
                                                            </td><td>

                                                            <input type="file"  class="form-control"  name="image4" alt="product image">

                                                                <img src="{{asset('uploads/'.$value1->image4    )}} "  name="image4" width="50" height="50"/>

                                                                {{--                                                                        <a href="{{ asset('uploads/'.$value1->image) }}">Product image</a>--}}
                                                            </td>
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

                                                    </div>
                                                </div>
                                            </div>



                                            <input type="submit" name="updateprodt" value="Update" class="btn btn-success">
                                    </div>
                                </div></section></form></div>


                {{--                    <td><a href="/moreproduct/{{$value->prod_id}}">Details</a> </td>--}}
                {{--<td> <a href="/deleteprod/{{$value->prod_id}}"> Delete</a></td>--}}

<br>

                <h5 style="color: #e90f92"><a href="/backve"> Back</a></h5>

                <!-- /.content -->



                <!-- /.content-wrapper -->
                @endforeach
            </form>
            </section>

        </div>
@endsection
