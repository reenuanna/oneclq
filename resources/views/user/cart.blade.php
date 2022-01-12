<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 21-04-2021
 * Time: 18:37
 */
        ?>
@extends('user.home')
@section('body')



            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 style="color: deeppink">Cart</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active"> cart</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card">

                                    <div class="card-body">


                                    <!-- /.card-header -->

                        <table class="table" align="center ">
                            <thead>
                            <tr><th></th>
                                <th></th>
                                <th>Product</th>
                                <th>Name</th>
                                <th>offer Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Buy</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($result6 as $key => $value5)

                                <tr>
                                    <td>
                                    {{--<form method="post" action="/mycart">--}}
                                            <input type="hidden" name="check" value="check">
                                        <input type="checkbox"  checked="checked"  name="status" value="1">
                                            {{--<input type="hidden" name="id" id="cartid" value="176">--}}
                                        {{--</form>--}}
                                    </td>
                                    <td >
                                        <input type="hidden" name="prod_id" id="prod_id" class="form-control" value="{{$value5->prod_id}}">

                                        <input type="hidden" name="uid" id="uid" class="form-control" value="{{session('uid')}}">
                                    </td>
                                    <td>
                                        <img src="{{asset('uploads/'.$value5->image)}} " width="50" height="50"/>

                                        <br/>&#8377;{{$value5->sell_price}}
                                        <input type="hidden" name="tprice" id="tprice" class="tprice" style="width: 40px" value="{{$value5->sell_price}}">

                                    </td>


                                    <td>{{$value5->prod_name}}</td>



                                @if($value5->offerprice == 0)
                                            <td>No off</td>
                                    @else
                                            <td>{{$value5->offerprice}}</td>
                                    @endif
                                    <td>

                                        <input class="quantity h-25 d-inline-block" name="quantity"  style="width: 50px" type="number" id="n" value="{{$value5->quantity}}" min="1" max="100"/>

                                       </td>
                                    <input type="hidden" value="{{$value5->sell_price}}" id="sell_price" class="sell_price" name="sell_price">

                                    <td><strong><p class="price mb-0"><div class="rupee-symbol mr-1 d-inline-block">&#8377;</div>
                                            <input  class="total" type="text" style="width: 80px" name="total" id="total" value="{{$value5->tprice}}"></strong>
                                    </td>
                                    <td><a href="/buynowcart/{{$value5->prod_id}}" > Buy</a></td>
                                    <td>
                                        <a href="/deletecart/{{$value5->prod_id}}"  class="btn btn-danger" style="color: red">X</a>

                                    </td>

                            @endforeach


{{--                                    <td>{{$value4->name}}</td>--}}
                                    {{--<td>{{$value->weight}}</td>--}}
                                    {{--<td>{{$value->height}}</td>--}}
                                    {{--<td>{{$value->length}}</td>--}}
                                    {{--<td>{{$value->width}}</td>--}}
                                    {{--<td>{{$value->stock}}</td>--}}

                                </tr>
                            </tbody>

                                </table>
                                    </div>
                                </div>
                            </div>





                            <div class="col-sm-4">
                                <div class="card">

                                    <div class="card-body">



                                    @foreach($csum as $sm)
                                            <br/>
                      <h2 style="color: deeppink">Total Amount</h2><br/><br/>
                       <b> Total sum : {{$sm->csum}}<br/><br/><br/>
                             <img src="../images/coins.jpg"> Total coins got: {{$sm->cosum}}
                              <input type="hidden" name="coins" id="coins" value="{{$sm->cosum}}"></b>
                        @endforeach
                                        <br/><br/><br/>
                        <a href="/buynow1" class="btn btn-warning btn-block btn btn-success">Place order</a>
<br/>


                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
</section>
                    </div>
<br/>

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
//            $('#n').on('click',function(){
//              alert("hi");
                var m = $('#n').val()


                var sp = $('#sell_price').val()
//                alert(sp);
                var o = m * parseInt(sp);

                var off= o / 100 ;

                var offer = parseInt (sp) - off ;
//                                alert(offer);
                $('#offerprice').val(offer);
                $('#tot').val(offer);

            });

            //            });


        </script>
@endsection
