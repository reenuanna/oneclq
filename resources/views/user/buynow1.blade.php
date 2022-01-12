<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 24-05-2021
 * Time: 10:15
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
</div></div></div></div>

                    <form name="frm" method="post" action="/buynowprice1">
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
                                                <textarea name="address" cols="3">
                                            {{$user->address}} ,  Kerala , India
                                    </textarea>
                                            @endforeach
                                            @error("address")
                                            <p style="color:red">{{$errors->first("address")}}
                                            @enderror
                                        </div>

                                    </div>

                                </div>
                                        <br/><br/>

                            </div>
                                    <div class="col-sm-6">
                                        <div class="card">

                                            <div class="card-body">

                        @foreach($csum as $sm)
                                    <br/> <h5 style="color: #000000"> Total Sum :
                            {{$sm->csum}}</h5><br/>
                                                <input type="hidden" name="tsum" id="tsum" value=" {{$sm->csum}}">
                                                {{--@endforeach--}}
                            @foreach($result5 as $sm1)

                                                <input type="hidden" name="coins" id="coins" value="{{$sm1->user_coins}}">
                                                    <h5 style="color: #000000"> Total coins : {{$sm1->user_coins}}</h5>


                                <p> Coins use to purchase :  <input type="number" name="coin" style="width:10%" id="coin" step="2" value="0" min="0" max="{{$sm1->user_coins}}" placeholder="Coins to purchase">
                                    @endforeach

                                    {{--@foreach($result6 as $value6)--}}
                                </p> <b>  Amount to pay after coin use :</b>   <p id="co"> {{$sm->csum}}

                                </p>
                                <input type="hidden" style="width: 100px" name="tpricecoin" id="tpricecoin" value="{{$sm->csum}}">

                            @endforeach
                                    <br/><br/>
                                    </div></div></div></div></div>
                            <div></div>
                        <div class="card bg-white">
                            <div class="card-body">
                                <div class="row">
                                    <dl class="col-12 col-lg-1 align-self-center">

                                        <!-- </label> -->
                                    </dl>
                            <table class="table">
                                <tr >
                                    <th>Product</th>
                                    <th>Sell Price
                                    </th>
                                    <th>offer Price</th>
                                    <th>Quantity</th>
                                    <th>Amount to pay</th>
                                </tr>
                                @foreach($result6 as $value6)

                                <tr>
                                    <td >
                                        <input type="hidden" name="prod_id" id="prod_id" class="form-control" value="{{$value6->prod_id}}">

                                        <input type="hidden" name="uid" id="uid" class="form-control uid" value="{{session('uid')}}">

                                 <figure class="itemside mb-0 flex-column" style="font-size:12px;">
                                        <div class="aside">
                                            <img src="{{asset('uploads/'.$value6->image)}} "  class="img-sm img-thumbnail">
                                        </div>
                                        <figcaption class="info pt-2">
                                            <input type="text" name="name" readonly class="form-control-plaintext" id="name" value=" {{$value6->prod_name}}">
                                            <input type="hidden" name="id" value="{{$value6->prod_id}}">
                                            <p class="text-success small">
                                                @if($value6->cod==2)
                                                    <i style="color: red">Not Available</i>
                                                @else
                                                    <i style="color: green">  COD Available for this product</i>
                                            @endif
                                        </figcaption>
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
                                </td>
                                    <td>&#8377;{{$value6->sell_price}}
                            <input type="hidden" value="{{$value6->sell_price}}" id="sp" class="sell_price" name="sell_price">
                            </td>
                                    <td>   &#8377;   <input type="text"  class="offer_price" style="width: 100px" name="offer_price" id="offer_price"  readonly value="{{$value6->offerprice}}"></strong>
                                    </td>
                                    <td>      <input class="h-25 d-inline-block quantity" name="quantity"  style="width: 50px" type="number" id="n" value="{{$value6->quantity}}" min="1" max="100"/>
                                    </td>
                                    <td>  &#8377; <input type="text" style="width: 100px" class="total" name="total" id="total" value="{{$value6->tprice}}"></strong>
                                    </td>
                                </tr>
                                @endforeach

                            </table>

                                </div>
                                <hr>

                            </div></div>
                            <input type="submit" class="btn btn-black btn-sm mt-3" style="background-color: orange" value="Confirm shopping">
                            </section>
                    </form>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>

    $(document).ready(function(){
            $(".quantity").change(function(){

                var row = $(this).closest('tr');
                var pid = parseInt(row.find("#prod_id").val());
                var uid = parseInt(row.find('#uid').val());
                var price = parseInt(row.find(".sell_price").val()); //get from hidden field
                var qty = parseInt(row.find(this).val());

                var total =  parseInt(qty)*parseInt(price);
//                alert(total);
                row.find("#total").val(total);

                $.ajax({

                    url:'/updatecart/' + pid,
                    method: 'get',
                    cache: false,
                    data: {
                        userid: uid,
                        quantity: qty,
                        sell_price: price,   // variable : value
                        tprice: total
                    },
                    success: function(response) {
//                        alert(response);
                        console.log(response);
                    }
                });
                location.reload(true);


            });
        });


    </script>
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
            $('#coin').click(function(){
                var total = $('#tsum').val()

                var ncoins = $('#coin').val()
//                alert(ncoins);
                var camt = 75 * ncoins ;
                if (total >= camt)
                {
                    var gtotal = total - camt;
                    $('#co').html(gtotal);
                    $('#tpricecoin').val(gtotal);


                }
                else
                {
                    var points=ncoins-2;
                    $('#coin').attr("max",points);
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
                $('#offerprice').val(num);
                $('#total').val(num);

            });

        });


    </script>
@endsection
