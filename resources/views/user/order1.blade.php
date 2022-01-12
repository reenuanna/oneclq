<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 24-05-2021
 * Time: 10:16
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
                @foreach($result6 as $value1)
                    {{--@endforeach--}}

                    <table  class="table">
                        {{--<p><tr><td colspan="7" align="center" ></td></tr></p>--}}
                        <tr style="background-color: orange">
                            <th>Product</th>
                            <th>Image</th>
                            <th>quantity</th>
                            <th>Total</th>
                            <th>address</th>
                            <th> payment</th>
                            <th>date</th>
                            {{--<th>Review</th>--}}
                        </tr>

                        <tr style="background-color: lightgoldenrodyellow">
                            <td>{{$value1->name}}</td>
                            <td><img src="{{asset('uploads/'.$value1->image)}} " width="100" height="50"/></td>
                            <td>{{$value1->quantity}}</td>

                            <td>{{$value1->total}}</td>

                            <td>{{$value1->address}}</td>
                            <td></td>
                            <td>{{$value1->date}}</td>
                            {{--<td><a href="/review/{{$value1->prod_id}}">Review</a> </td>--}}


                        </tr>


                    </table>
                @endforeach
                {{--<a href="/"> <input type="submit" class="btn btn-black btn-sm mt-3" style="background-color: orange" value="continue shopping"></a>--}}
            </div>
        </div>
    </div>
@endsection