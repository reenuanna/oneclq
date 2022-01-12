<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 28-04-2021
 * Time: 22:49
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
                                    <li class="breadcrumb-item d-flex mt-1"><a href="/cart">Cart</a></li>
                                    <li class="breadcrumb-item d-flex mt-1">Checkout</li>
                                </ol>
                            </nav>
                        </div>
                        {{--</div>--}}
                    </div>
                    <div class="col-12 col-lg-8">

                        <div class="card mb-15">
                            <div class="card-body">
                                <div class="col-auto address-box">

                                    <h3 class="card-title card-title-sm mb-15">Select Address</h3>
                                    <div class="card mt-15 border-0"> <center>Enter Address </center>
                                        <textarea name="address" cols="3"></textarea>                                </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="row">
                                <dl class="col-12 col-lg-1 align-self-center">
                                    <!-- <label class="checkbox"> -->
                                    <form method="post" action="/">
                                        <input type="hidden" name="_token" value="KHmFRLn2BM3ANdYIFGqIC4VXw3CjWbztPSGG2Bo2">
                                        <input type="checkbox"  checked="checked"  name="status" value="1" >
                                        <!-- <span class="checkmark"></span> -->
                                        <input type="hidden" name="id" id="cartid" value="76">
                                    </form>
                                    <!-- </label> -->
                                </dl>
                                @foreach($result3 as $value3)

                                    <dl class="col-12 col-lg-3">
                                        <dt class="d-block font-size-ms mb-1 mb-lg-3">Product</dt>
                                        <dd class="w-100">
                                            <figure class="itemside mb-0 flex-column" style="font-size:12px;">
                                                <div class="aside">
                                                    <img src="{{asset('uploads/'.$value3->image)}} "  class="img-sm img-thumbnail">
                                                </div>
                                                <figcaption class="info pt-2">
                                                    <input type="text" name="name" class="title" value=" {{$value3->prod_name}}">
                                                    <!-- <p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p> -->
                                                    <p class="text-success small">
                                                        @if($value3->cod==2)
                                                            <i style="color: red">Not Available</i>
                                                        @else
                                                            <i style="color: green">  COD Available for this product</i>
                                                        @endif
                                                        {{--<p>DQ Points: <b>                                             2  </b><p>--}}

                                                </figcaption>
                                            </figure>
                                        </dd>
                                    </dl>
                                @endforeach
                                <dl class="col-12 col-lg-2">
                                    <dt class="d-block font-size-ms mb-1 mb-lg-3">Price</dt>
                                    <dd class="w-100">
                                        <div class="price-wrap">
                                            <div class="price"><div class="rupee-symbol mr-1 d-inline-block">&#8377;</div>

                                                {{$value3->sell_price}}</div>
                                            <input type="hidden" value="{{$value3->sell_price}}" id="sp" name="sell_price">

                                        </div> <!-- price-wrap .// -->
                                    </dd>
                                </dl>

                                <dl class="col-12 col-lg-2" id="field1">
                                    <dt class="d-block font-size-ms mb-1 mb-lg-3">Quantity</dt>
                                    <dd class="w-100">
                                        <div class="quantity_de_in">
                                            <button type="button" id="sub" name="quantity" class="sub">-</button>
                                            <input class="h-25 d-inline-block" name="quantity"  style="width: 20px" type="text" id="n" value="1" min="1" max="100"/>
                                            <button type="button" id="add" name="quantity"  class="add">+</button>


                                        </div>
                                    </dd>
                                </dl>



                                <dl class="col-12 col-lg-2">
                                    <dt class="d-block text-truncate font-size-ms mb-1 mb-lg-3">Total</dt>
                                    <dd class="w-100">
                                        {{--<div class="price-wrap">--}}
                                        <strong><p class="price mb-0"><div class="rupee-symbol mr-1 d-inline-block">&#8377;</div>
                                            <input type="text" style="width: 50px" name="total" id="total" value="{{$value3->sell_price}}"></strong>
                                        {{--</div> <!-- price-wrap .// -->--}}
                                    </dd>
                                </dl>

                                {{--Total Price  <input class="h-25 d-inline-block" type="text" name="total" id="total" value="{{$value3->sell_price}}">--}}
                                <br>
                                <dl class="col-12 col-lg-2">
                                    <dt class="d-block font-size-ms mb-1 mb-lg-3">Action</dt>
                                    <dd class="w-100">
                                        <!-- <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-primary mr-2 btn-sm" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> -->
                                        <a href="/delete"  class="btn btn-danger btn-sm">X</a>
                                    </dd>
                                </dl>

                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
                <a href="/buynowprice/{{$value3->prod_id}}" class="btn btn-black btn-sm mt-3" style="background-color: orange">Continue shopping </a>

                </div>

                <div class="actions row">
                <div class="col-12">

                <div class="card mt-15">
                <div class="card-body">
                <div class="col-12 col-md-7 pl-0">

                <h3 class="card-title card-title-sm mb-0">Select a payment method</h3>
                <small class="font-size-ms text-muted">Get Instant refund on cancellations | Zero payment failures</small>

                <div class="card mt-15">
                <div class="card-body">
                <div class="a-box pmts-instrument-box mb-15">
                <div class="custom-radio custom-control" id="online">
                <input type="radio" class="custom-control-input radio" id="pm-1" name="payment-option" >
                <label class="custom-control-label leading-tight" for="pm-1">
                <div class="font-size-md font-weight-bold ml-2">Online Payment</div>
                <small class="d-inline-block ml-2 text-muted font-size-ms">credit card/Debit card/UPI.</small>
                </label>
                </div>
                </div>

                <div class="a-box pmts-instrument-box">
                <div class="custom-radio custom-control"  >
                <input type="radio" class="custom-control-input radio" id="pm-2" name="payment-option"     >
                <label class="custom-control-label leading-tight" for="pm-2">
                <div class="font-size-md font-weight-bold ml-2">cash on Delivery</div>
                <small class="d-inline-block ml-2 text-muted font-size-ms">on devilery time</small>
                </label>
                </div>
                </div>
                </div>
                </div>


                </div>

                </div>
                </div>
                </div>
                </div>


            </div>



            <div class="col-12 col-lg-4">
            <div class="card price-box">
            <div class="card-body">
            <div class="total-figure mt-3">
            <div class="card-title card-title-sm mb-3">Total</div>
            <ul class="list-inline total_tabl mb-0">
            <li class="list-inline-item mr-3">
            <p class="mb-2 font-size-ms product-item-label">Sub Total</p>
            </li>
            <span class="colon d-inline-block mr-4">:</span>
            <li class="list-inline-item cs_li">
            <div class="font-size-ms"><div class="rupee-symbol d-inline-block">&#8377;</div> {{$value3->sell_price}}</div>
            </li>
            </ul>

            <ul class="list-inline total_tabl mb-0">
            <li class="list-inline-item mr-3">
            <p class="mb-2 font-size-ms product-item-label">Shipping Charge</p>
            </li>
            <span class="colon d-inline-block mr-4">:</span>
            <li class="list-inline-item cs_li font-size-ms">
            <div><div class="rupee-symbol d-inline-block">&#8377;</div> </div>
            </li>
            </ul>


            <ul class="list-inline total_tabl mb-0">
            <li class="list-inline-item mr-3">
            <p class="text-right font-size-ms"> Tax :</p>
            </li>
            <li class="list-inline-item cs_li font-size-ms">
            <div><div class="rupee-symbol d-inline-block">&#8377;</div> 0</div>
            </li>
            </ul>
            </div>
            <div class="dropdown-divider"></div>
            <ul class="list-inline total_tabl pt-3 mb-0">
            <li class="list-inline-item font-size-md">
            <p class="mb-0 text-left">
            <strong>Amount to pay</strong>
            </p>
            </li>
            <span class="colon d-inline-block mr-4">:</span>
            <li class="list-inline-item cs_li">
            <div class="font-size-lg font-weight-bold">
            <div class="rupee-symbol d-inline-block">&#8377;</div>  {{$value3->sell_price}}
            </div>
            </li>
            </ul>

            </div>
            </div>
            </div>










            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script>
                var options = {
                    "key": "rzp_test_lFVlXsa2kiCYXE", // Enter the Key ID generated from the Dashboard
                    "amount": '207000', // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                    "currency": "INR",
                    "name": "DailyCliq",
                    "description": "Dailycliq, Online Transaction",
                    "image": "https://dailycliq.com/images/favicons/android-icon-192x192.png",
                    "offers": [
                        "offer_GWFEK0x9c0sssd"
                    ],
                    //"order_id": "order_9A33XWu170gUt1", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                    "handler": function (response){
                        var payment_id =response.razorpay_payment_id;
                        // alert(response.razorpay_payment_id);
                        // alert(response.razorpay_order_id);
                        // alert(response.razorpay_signature)
                        $.ajax({
                            type: "GET",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },

                            url:"https://dailycliq.com/payment_final?payment_id="+payment_id+"&amount="+207000+"&payment_type=online",

                            dataType: "json",
                            processData: false,
                            contentType: false,
                            cache: false,
                            success: function (msg) {
                                // alert("Success");
                                location.href = "https://dailycliq.com/paysuccess";
                            },
                            fail: function (msg) {
                                location.href = "https://dailycliq.com/paysuccess";
                            }

                        });



                    },
                    "prefill": {
                        "name": "",
                        "email": "",
                        "contact": ""
                    },
                    "notes": {
                        "address": "Razorpay Corporate Office"
                    },
                    "theme": {
                        "color": "#FFBA1A"
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.on('payment.failed', function (response){
                    alert(response.error.code);
                    alert(response.error.description);
                    alert(response.error.source);
                    alert(response.error.step);
                    alert(response.error.reason);
                    alert(response.error.metadata.order_id);
                    alert(response.error.metadata.payment_id);
                });
                document.getElementById('rzp-button1').onclick = function(e){
                    rzp1.open();
                    e.preventDefault();
                }
            </script>



            <script>
                $(document).ready(function(){
                    $('#sub').on('click',function(){
//              alert("hi");

                        var v = $('#n').val()
                        var m = v - 1 ;
                        $('#n').val(m);
                        var sp = $('#sp').val()
//                alert(sp);
                        var total=  m * parseInt(sp) ;
                        $('#total').val(total);

                    });

                    $('#add').on('click',function(){
//                              alert("hi");

                        var ad = $('#n').val()
                        var a = parseInt(ad) + 1 ;
                        $('#n').val(a);
                        var sp = $('#sp').val()
//                alert(sp);
                        var total= a * parseInt(sp);
                        $('#total').val(total);

                        $.ajax({
                            type:"post",
                            url:"/buy/"+catid,
                            success:function(result)
                            {
//                        alert(result);
                                $('#sub').html(result);
                            }
                        });
                    });
                });


            </script>

@endsection
