<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 28-04-2021
 * Time: 11:56
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
                                    <li class="breadcrumb-item d-flex mt-1"><a href="/">Product</a></li>
                                    <li class="breadcrumb-item d-flex mt-1">Checkout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                </div></div></div>

                    <form name="frm" method="post" action="/buynowprice">
                            @csrf
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">

                                            <div class="card-body">

                                <h3 class="card-title card-title-sm mb-15">Currently only available to Kerala</h3>
                                <div class="card mt-15 border-0" style="color: red"> <center>Update permanent  Address in profile </center>
                                @foreach($result5 as $user)
                                    <textarea name="address" cols="3" >
                                            {{$user->address}} , Kerala , India
                                    </textarea>
                                @endforeach
                                    @error("address")
                                    <p style="color:red">{{$errors->first("address")}}
                                    @enderror
                                </div>

                            </div>

                        </div>
                        </div>
                                    @foreach($result6 as $value6)

                                    <div class="col-sm-6">
                                        <div class="card">

                                            <div class="card-body">
                                                @foreach($result5 as $sm)
                                                   <p>  Total coins have : {{$sm->user_coins}}
                                                        <input type="hidden" name="coins" id="coins" value="{{$sm->user_coins}}">
                                                   </p>
                                                <p> Coins use to purchase :  <input type="number" name="coin" style="width:10%" id="coin" step="2" value="0" min="0" max="{{$sm->user_coins}}" placeholder="Coins to purchase">
                                                    </p> <b>  Amount to pay after coin use :</b>   <p id="co">{{$value6->tprice}}
                                                        @endforeach

                                                </p>
                                                    <input type="hidden" style="width: 100px" name="tpricecoin" id="tpricecoin" value="{{$value6->tprice}}">

                                                <br/><br/>
                                            </div></div></div></div></div>
                            <div></div>
                            <div class="card bg-white">
                                <div class="card-body">
                                    <div class="row">
                                        <dl class="col-12 col-lg-1 align-self-center">

                                            <!-- </label> -->
                                        </dl>
                                <dl class="col-12 col-lg-3">
                                    <dt class="d-block font-size-ms mb-1 mb-lg-3">Product</dt>
                                    <dd class="w-100">
                                        <figure class="itemside mb-0 flex-column" style="font-size:12px;">
                                            <div class="aside">
                                                <img src="{{asset('uploads/'.$value6->image)}} "  class="img-sm img-thumbnail">
                                                <br/>
                                                &#8377; {{$value6->sell_price}}
                                            <input type="hidden" value="{{$value6->sell_price}}" id="sp" name="sell_price" >
                                            </div>
                                            <figcaption class="info pt-2">
                                               <input type="text" name="name" id="name" readonly class="form-control-plaintext" value=" {{$value6->prod_name}}">
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



                                <dl class="col-12 col-lg-2" >
                                    <dt class="d-block font-size-ms mb-1 mb-lg-3" >Sell Price</dt>
                                    <dd class="w-100" >
                                        <div class="price-wrap" >
                                            <div class="price" ><div class="rupee-symbol mr-1 d-inline-block" >&#8377;</div>

                                                {{$value6->sell_price}}</div>
                                            <input type="hidden" value="{{$value6->sell_price}}" id="sp" name="sell_price" >

                                        </div> <!-- price-wrap .// -->
                                    </dd>
                                </dl>
                                    <dl class="col-12 col-lg-2">
                                        <dt class="d-block text-truncate font-size-ms mb-1 mb-lg-3">offer Price</dt>
                                        <dd class="w-100">
                                            {{--<div class="price-wrap">--}}
                                            <strong><p class="price mb-0"><div class="rupee-symbol mr-1 d-inline-block">&#8377;</div>
                                                {{--<input type="text" style="width: 100px" name="offerprice" id="offerprice" value="{{$value6->offerprice}}"></strong>--}}
                                                <input type="text"  style="width: 100px" name="offer_price" id="offer_price"  readonly value="{{$value6->offerprice}}"></strong>
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
                                    <dt class="d-block text-truncate font-size-ms mb-1 mb-lg-3" >Total amount</dt>
                                    <dd class="w-100">
                                        {{--<div class="price-wrap">--}}
                                            <strong><p class="price mb-0"><div class="rupee-symbol mr-1 d-inline-block" >&#8377;</div>
                                                <input type="text" style="width: 100px" name="total" id="total" value="{{$value6->tprice}}"></strong>
                                        <input type="hidden" style="width: 100px" name="total1" id="total1" value="{{$value6->tprice}}"></strong>

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
                            {{--@foreach($csum as $sm)--}}

                                {{--<input type="hidden" name="coins" id="coins" value="{{$sm->cosum}}">--}}
                                {{--<h5 style="color: #000000"> Total coins : {{$sm->cosum}}</h5>--}}
                            {{--@endforeach--}}
                            <br/>
                            {{--<input type="number" name="coin" style="width:5%" id="coin" step="2" value="0" min="0" max="" placeholder="Coins to purchase">--}}
                           {{--<b>  Amount to pay :</b>   <p id="co">{{$value6->tprice}}--}}

                            {{--</p>                                <input type="text" style="width: 100px"  value="{{$value6->tprice}}">--}}

                        </div>
                    </div>







                    <div class="col-sm-12">
                        <div class="card">

                            <div class="card-body">

                                <input type="submit" class="btn btn-black btn-sm mt-3" style="background-color: orange" value="Confirm shopping">
                 </div></div></div>  </section> </form>








    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
            $('#tpricecoin').val(total);


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

        $('#coin').click(function(){
            var total = $('#total').val()
            var ncoins = $('#coin').val()
            var camt = 75 * ncoins ;
            if (total >= camt)
            {
//                var g = g + 20 ;
                var gtotal = total - camt  ;

                $('#co').html(gtotal);
                $('#tpricecoin').val(gtotal);


            }
            else
            {
                var points=ncoins-2;
                $('#coins').attr("max",points);
                $('#coin').attr("value",points);
                swal("No more coins available", "maximum coins:"+points, "warning");

//                $('#coin').removeAttr("type")
//                $('#total').val(total);
            }
        })
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
                var num = parseInt(offer);
//                                alert(offer);
                $('#offerprice').val(num);
                $('#total').val(num);

            });

        });


    </script>
@endsection
