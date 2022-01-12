<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 20-05-2021
 * Time: 14:42
 */
        ?>

@extends('user.home')

@section('body')


    <div class="cart_wrapper">
        <div class="container mb-3">
            <div class="row">
                <div class="page-title-overlap col-12">
                    <div class="container d-lg-flex justify-content-between align-items-center py-2 py-lg-3">
                        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2 d-none d-lg-block">
                            <div class="hed_tracker">
                                <ul class="list-unstyled multi-steps">
                                    <li class="font-size-ms active">
                                        <i data-eva="checkmark-circle-2" class="mr-1"></i>Cart
                                    </li>
                                    <li class="font-size-ms active">
                                        <i data-eva="checkmark-circle-2" class="mr-1"></i>Checkout
                                    </li>
                                    <li class="font-size-ms">
                                        <i data-eva="checkmark-circle-2-outline" class="mr-1"></i>Completed
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                            <h1 class="h3 mb-0">Checkout</h1>
                            <nav class="breadcrumb invert p-0 mb-0" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-light mt-n1 pl-0 mb-0 py-0">
                                    <li class="breadcrumb-item d-flex mt-1"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item d-flex mt-1"><a href="/mycart">Cart</a></li>
                                    <li class="breadcrumb-item d-flex mt-1">Checkout</li>
                                </ol>
                            </nav>
                        </div>
                        {{--</div>--}}
                    </div>

                    <form name="frm" method="post" action="/buynowprice">
                        @csrf
                        <div class="col-12 col-lg-8">

                            <div class="card mb-15">
                                <div class="card-body">
                                    <div class="col-auto address-box">

                                        <h3 class="card-title card-title-sm mb-15">Select Address</h3>
                                        <div class="card mt-15 border-0"> <center>Enter Address </center>

                                    <textarea name="address" cols="3">

                                    </textarea>

                                            @error("address")
                                            <p style="color:red">{{$errors->first("address")}}
                                            @enderror
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-white">
                            <div class="card-body">
                                <div class="row">
                                    <dl class="col-12 col-lg-1 align-self-center">

                                        <!-- </label> -->
                                    </dl>

                                    @foreach($result6 as $value6)
                                        <dl class="col-12 col-lg-3">
                                            <dt class="d-block font-size-ms mb-1 mb-lg-3">Product</dt>
                                            <dd class="w-100">
                                                <figure class="itemside mb-0 flex-column" style="font-size:12px;">
                                                    <div class="aside">
                                                        <img src="{{asset('uploads/'.$value6->image)}} "  class="img-sm img-thumbnail">
                                                    </div>
                                                    <figcaption class="info pt-2">
                                                        <input type="text" name="name" id="name" value=" {{$value6->prod_name}}">
                                                        <input type="hidden" name="id" value="{{$value6->prod_id}}">
                                                        <p class="text-success small">
                                                            @if($value6->cod==2)
                                                                <i style="color: red">Not Available</i>
                                                            @else
                                                                <i style="color: green">  COD Available for this product</i>
                                                        @endif
                                                    </figcaption>
                                                    <i style="color: green"> Available Coins: <b id="coins"> 0 </b>
                                                        <input type="hidden" id="b" value="" name="b" class="form-control"  style="width: 30px" >
                                                        {{--Coins For this product :--}}

                                                        {{--<input type="text" name="b" class="b" id="b"   style="width: 30px"/>--}}
                                                    </i>
                                                    <i style="color: green"> Offer for this product: <b id="offer">  </b>
                                                        @if($value6->offer=='NULL')
                                                            No
                                                            <input type="hidden" name="m" id="m" value="0">
                                                        @elseif($value6->offer=='%')
                                                            No Offer
                                                            <input type="hidden" name="m" id="m" value="0">

                                                        @else
                                                            {{$value6->offer}}
                                                            <input type="hidden" name="m" id="m" value="{{$value6->offer}}">%
                                                        @endif
                                                    </i>
                                                </figure>
                                            </dd>
                                        </dl>



                                        <dl class="col-12 col-lg-2">
                                            <dt class="d-block font-size-ms mb-1 mb-lg-3">Sell Price</dt>
                                            <dd class="w-100">
                                                <div class="price-wrap">
                                                    <div class="price"><div class="rupee-symbol mr-1 d-inline-block">&#8377;</div>

                                                        {{$value6->sell_price}}</div>
                                                    <input type="hidden" value="{{$value6->sell_price}}" id="sp" name="sell_price">

                                                </div> <!-- price-wrap .// -->
                                            </dd>
                                        </dl>
                                        <dl class="col-12 col-lg-2">
                                            <dt class="d-block text-truncate font-size-ms mb-1 mb-lg-3">offer Price</dt>
                                            <dd class="w-100">
                                                {{--<div class="price-wrap">--}}
                                                <strong><p class="price mb-0"><div class="rupee-symbol mr-1 d-inline-block">&#8377;</div>
                                                    {{--<input type="text" style="width: 100px" name="offerprice" id="offerprice" value="{{$value6->offerprice}}"></strong>--}}
                                                    <input type="text" style="width: 100px"  value="{{$value6->offerprice}}"></strong>
                                                @error("offerprice")
                                                <p style="color:red">{{$errors->first("offerprice")}}
                                                @enderror
                                            </dd>
                                        </dl>
                                        <dl class="col-12 col-lg-2" id="field1">
                                            <dt class="d-block font-size-ms mb-1 mb-lg-3">Quantity</dt>
                                            <dd class="w-100">
                                                <div class="quantity_de_in">
                                                    {{--<button type="button" id="sub" name="quantity" class="sub">-</button>--}}
                                                    <input class="h-25 d-inline-block" name="quantity"  style="width: 50px" type="number" id="n" value="{{$value6->quantity}}" min="1" max="100"/>
                                                    {{--<button type="button" id="add" name="quantity"  class="add">+</button>--}}


                                                </div>
                                                @error("quantity")
                                                <p style="color:red">{{$errors->first("quantity")}}
                                                @enderror
                                            </dd>
                                        </dl>



                                        <dl class="col-12 col-lg-2">
                                            <dt class="d-block text-truncate font-size-ms mb-1 mb-lg-3" >Pay amount</dt>
                                            <dd class="w-100">
                                                {{--<div class="price-wrap">--}}
                                                <strong><p class="price mb-0"><div class="rupee-symbol mr-1 d-inline-block" >&#8377;</div>
                                                    <input type="text" style="width: 100px" name="total" id="total" value="{{$value6->tprice}}"></strong>

                                                {{--<input type="text" style="width: 100px" name="total" id="total" value="{{$value6->total}}"></strong>--}}
                                                {{--</div> <!-- price-wrap .// -->--}}
                                                @error("total")
                                                <p style="color:red">{{$errors->first("total")}}
                                                @enderror
                                            </dd>
                                        </dl>

                                        {{--Total Price  <input class="h-25 d-inline-block" type="text" name="total" id="total" value="{{$value3->sell_price}}">--}}
                                        <br>

                                        {{--<dl class="col-12 col-lg-2">--}}
                                        {{--<dt class="d-block font-size-ms mb-1 mb-lg-3">Action</dt>--}}
                                        {{--<dd class="w-100">--}}
                                        <!-- <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-primary mr-2 btn-sm" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> -->
                                        {{--<a href="/deleted"  class="btn btn-danger btn-sm">X</a>--}}
                                        {{--</dd>--}}
                                        {{--</dl>--}}
                                    @endforeach

                                </div>
                                <hr>

                            </div>
                        </div>
                        <input type="submit" class="btn btn-black btn-sm mt-3" style="background-color: orange" value="Confirm shopping">
                    </form>
                </div>
            </div>
        </div>



    </div>





    {{--<div class="actions row">--}}
    {{--<div class="col-12">--}}

    {{--<div class="card mt-15">--}}
    {{--<div class="card-body">--}}
    {{--<div class="col-12 col-md-7 pl-0">--}}

    {{--<h3 class="card-title card-title-sm mb-0">Select a payment method</h3>--}}
    {{--<small class="font-size-ms text-muted">Get Instant refund on cancellations | Zero payment failures</small>--}}

    {{--<div class="card mt-15">--}}
    {{--<div class="card-body">--}}
    {{--<div class="a-box pmts-instrument-box mb-15">--}}
    {{--<div class="custom-radio custom-control" id="online">--}}
    {{--<input type="radio" class="custom-control-input radio" id="pm-1" name="payment-option" >--}}
    {{--<label class="custom-control-label leading-tight" for="pm-1">--}}
    {{--<div class="font-size-md font-weight-bold ml-2">Online Payment</div>--}}
    {{--<small class="d-inline-block ml-2 text-muted font-size-ms">credit card/Debit card/UPI.</small>--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="a-box pmts-instrument-box">--}}
    {{--<div class="custom-radio custom-control"  >--}}
    {{--<input type="radio" class="custom-control-input radio" id="pm-2" name="payment-option"     >--}}
    {{--<label class="custom-control-label leading-tight" for="pm-2">--}}
    {{--<div class="font-size-md font-weight-bold ml-2">cash on Delivery</div>--}}
    {{--<small class="d-inline-block ml-2 text-muted font-size-ms">on devilery time</small>--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}










    <script>
        $(document).ready(function(){
            var t= $('#sp').val();
            var b =  parseInt(parseInt(t)/150)*2;
            $('#b').val(b); //display coins into text field
            $('#coins').html(b);

            $('#n').on('click',function(){
//              alert("hi");

                var v = $('#n').val()
                var m = v - 1 ;
                $('#n').val(m);
                var sp = $('#sp').val()
//                alert(sp);
                var total=  m * parseInt(sp) ;
                $('#total').val(total);
                var t = $("#total").val();
                var b = parseInt(parseInt(t)/150)*2;
                $('#b').val(parseInt(b));
            });

            $('#n').on('click',function(){
//                              alert("hi");

                var ad = $('#n').val()
                var a = parseInt(ad) + 1 ;
                $('#n').val(a);
                var sp = $('#sp').val()
//                alert(sp);
                var total= a * parseInt(sp);
                $('#total').val(total);

//                var t = $("#sp").val();
//                var b = parseInt (parseInt(t)/150)*2;
//            $('#b').val(parseInt(b));
//            alert(parseInt(b));

//            $.ajax({
//                type:"post",
//                url:"/buy/"+catid,
//                success:function(result)
//                {
////                        alert(result);
//                    $('#sub').html(result);
//                }
//            });
            });
        });


    </script>
    <script>
        $(document).ready(function(){
            $('#n').on('click',function(){
//              alert("hi");
                var m = $('#m').val()


                var tot = $('#total').val()

                var o = m * parseInt(tot);

                var off= o / 100 ;
//                alert(off);
                var offer = parseInt(tot) - off ;
//                                alert(offer);
                $('#offerprice').val(offer);


            });

        });


    </script>
@endsection
