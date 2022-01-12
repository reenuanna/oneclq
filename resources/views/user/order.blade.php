<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 29-04-2021
 * Time: 14:48
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

            <th>Bank details</th><th></th>
        </tr>

            <tr style="background-color: lightgoldenrodyellow">
                <td>{{$value1->name}}</td>
                <td><img src="{{asset('uploads/'.$value1->image)}} " width="100" height="50"/></td>
                <td>{{$value1->quantity}}</td>

                <td>{{$value1->total}}</td>

                 @if($value1->buystatus == 0)

                <td>Pending</td>

                @elseif($value1->buystatus == 1)

                    <td>Order Approved</td>
                @elseif($value1->status == 2)

                    <td>Product Shipped</td>
                @elseif($value1->buystatus == 3)

                    <td>Delivered Successfully</td>
                @elseif($value1->buystatus == 4)
                    <td style="color: red">Vendor will contact</td>
                @elseif($value1->buystatus == 6)
                    <td >Order Cancelled</td>
                @else

                    <td>Order Return Successfully</td>

                    @endif
                <td>{{$value1->date}}</td>
{{--<td><a href="/review/{{$value1->prod_id}}">Review</a> </td>--}}
                @if($value1->buystatus == 1)
                    <td><a href="/cancel/{{$value1->prod_id}} " id="cancel">Cancel</a>

                    @elseif($value1->buystatus == 2)
                    <td>Can't Cancel</td>

                    @elseif($value1->buystatus == 3)

                    <td><a href="/returns/{{$value1->prod_id}} " id="returns">Return</a>
                    @elseif($value1->buystatus == 4)
                        <td>    <?php
                            $date = strtotime("+5 day", strtotime( $value1->date ));
                            echo   $new_date= date("Y-m-d", $date);
                            if($new_date == date('Y-m-d'))
                        {
                                ?>
                    <td>Reorder </td>
                        <?php
                            }
                            else
                    {


                        ?>

                        <td><a href="/returns/{{$value1->prod_id}} " id="returns">Return</a>
                            <?php
                            }
                            ?></td>
                    @elseif($value1->buystatus == 6)
                    <td>Cancelled</td>
                @else
                <td><a href="/returns/{{$value1->prod_id}} " id="returns">Return</a>

                    @endif


                </td>
                    <td><a href="https://dashboard.razorpay.com/#/access/signin">Bank Account</a> </td>

            </tr>


    </table>
                    @endif
@endforeach
       {{--<a href="/"> <input type="submit" class="btn btn-black btn-sm mt-3" style="background-color: orange" value="continue shopping"></a>--}}
            </div>
        </div>
    </div>
    @endsection