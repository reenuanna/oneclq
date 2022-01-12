<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 09-06-2021
 * Time: 22:20
 */
        ?>

@extends('user.home')

@section('body')

    <div class="card bg-white">
        <div class="card-body">
            <div class="row">
                <dl class="col-12 col-lg-1 align-self-center">
                    <!-- <label class="checkbox"> -->

                    <!-- </label> -->
                </dl>
                {{--<form name="frm" method="post" action="/buynowprice">--}}
                {{--@csrf--}}
                <h2>Your Orders</h2>
                {{--<p><h3>Total  Ordered :  </h3></p>--}}
                @foreach($result6 as $value1)
                    @if($value1->status == 0)
                    @else
                        <table  class="table">
                            {{--<p><tr><td colspan="7" align="center" ></td></tr></p>--}}
                            <tr style="background-color: orange">
                                <th>Product</th>
                                <th>Image</th>
                                <th>quantity</th>
                                <th>Total</th>
                                <th> Status</th>
                                <th>date</th>
                                <th>Return</th>
                            </tr>

                            <tr style="background-color: lightgoldenrodyellow">
                                <td>{{$value1->name}}</td>
                                <td><img src="{{asset('uploads/'.$value1->image)}} " width="100" height="50"/></td>
                                <td>{{$value1->quantity}}</td>

                                <td>{{$value1->total}}</td>

                                @if($value1->status == 0)

                                    <td>Pending</td>

                                @elseif($value1->status == 1)

                                    <td>Order Approved</td>
                                @elseif($value1->status == 2)

                                    <td>Product Shipped</td>
                                @elseif($value1->status == 3)

                                    <td>Delivered Successfully</td>
                                @else
                                    <td style="color: red">Rejected</td>

                                @endif
                                <td>{{$value1->date}}</td>
                                @foreach($result7 as $value7)

                                @if($value7->status == 4)

                                    <td>We will contact you</td>

                                @else
                                    <td style="color: red">Successful</td>
                                @endif
                                    @endforeach

                            </tr>


                        </table>
                    @endif

                @endforeach
                {{--<a href="/"> <input type="submit" class="btn btn-black btn-sm mt-3" style="background-color: orange" value="continue shopping"></a>--}}
            </div>
        </div>
    </div>
@endsection