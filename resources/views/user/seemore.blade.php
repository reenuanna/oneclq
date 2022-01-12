<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 21-04-2021
 * Time: 13:47
 */
        ?>
@extends('user.home')
@section('body')
    {{--(mrp-sellingPrice)/mrp *100--}}
    <style>
        .flash-deal-wrapper {
            /*background: #fa7a00 url('../../app/web/images/fd-patterns.svg');*/
            background-size: 270%;
            background-position: center;
        }
        .flash-deal-icon svg {
            fill:white;
            animation: zoominoutsinglefeatured 1s infinite ;
        }
        .fd-text {
            line-height: 1.15;
        }
        .fd-title {
            line-height: initial;
        }
        @keyframes  zoominoutsinglefeatured {
            0% {
                transform: scale(1,1);
            }
            50% {
                transform: scale(1.2,1.2);
            }
            100% {
                transform: scale(1,1);
            }
        }

    </style>


    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js	">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js	">
    </head>
    @foreach($result3 as $value3)
    <div class="card border-0">
        <div class="card-body p-1 p-lg-2">
            <div class="bread_crmb_wrapp">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/">Product </a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$value3->prod_name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <input type="hidden" id="enddate" value="2021-04-30 23:31:00">
            <div class="msgDiv1"></div>
            <div class="item_detial">
                <div class="container">

                    <div class="row justify-content-start" id="detail-container">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 slider_res">
                            <div class="slider-container" id="slider__container">
                                <section class="banner-section mb-3 mb-lg-0 mr-lg-0">
                                    <div class="vehicle-detail-banner banner-content clearfix">
                                        <div class="banner-slider position-relative d-flex flex-column flex-lg-row-reverse pb-3 pb-lg-0">
                                            <div class="mobile-share position-absolute d-block d-lg-none" id="mob-share">
                                                <div class="d-flex justify-content-center align-items-center h-100 p-2">
                                                    <i data-eva="share-outline" class="fill-white"></i>
                                                </div>
                                            </div>

                                            <div class="slider-nav d-flex flex-row flex-lg-column mr-0 MagicScroll" data-options="orientation:vertical; height: 440; items: 6; width: 60;" data-mobile-options="orientation:horizontal; height: 60; width:300; items: 4;">
                                                  <img src="{{asset('uploads/'.$value3->image)}} " width="300 " />
                                            </div>
                                            <br/>

                                        </div>
                                    </div>
                                </section>
                                @if (session('msg'))<p style="color: red">{{session('msg')}}</p>@endif
         <form id="mycarts"  name="mycart" action="/prodcart/{{$value3->prod_id}}"  method="post" class="product" enctype="multipart/form-data">
                                @csrf
                            </div>
                        </div>


                        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                            <div class="product_right_detail">
                                <ul  class="xxx-col-inner list-inline point-product">
                                    <li class="list-inline-item">
                                <h2 class="entry-title">   {{$value3->prod_name}}
                                </h2>
                                        <li class="list-inline-item">
                                    </li><li class="list-inline-item" style="color: red">|
                                    </li>

                                        <li class="list-inline-item">

                                           <i style="color: green"> <img src="/images/coins.jpg" width="10%"> Earn Coins <b id="coins" style="background-color: #ffff00">  </b>
                                        <input type="hidden" id="b" value="" name="b" class="form-control"  style="width: 30px" >
                                    </i>
                                    </li>
                                </ul>
                                <ul class="xxx-col-inner list-inline point-product">
                                    <li class="list-inline-item">
                                        <p class="mb-0">
                                            <span class="font-size-md d-inline-block product-item-label">Price</span>
                                        </p>
                                    </li>
                                    <div class="colon d-inline-block mr-4">:</div>
                                    <li class="list-inline-item dq-mall">

                                        <div class="list-inline-item dealoftheday">

                                            <input readonly class="form-control-plaintext" type="text" name="offerprice" id="offerprice" style="width: 50px;color: green"  value="{{$value3->sell_price}}">
                                            {{--<h3 class="mb-0"><i class="price" aria-hidden="true"></i></h3>--}}

                                        </div>
                                        <div class="list-inline-item dealoftheday">
                                                <input type="hidden" value="{{$value3->sell_price}}" id="sp" name="sell_price">

                                            <h3 class="mb-0"><i class="price" aria-hidden="true"></i>
                                                <p class="ofer_price mb-0"><b><del>   &#x20b9; {{$value3->sell_price}} </del></b></p>

                                       </h3>
                                        </div>
                                        <div class="list-inline-item offer-price">
                                            <p class="ofer_price mb-0"><b><i class="mrp" aria-hidden="true"></i>&#x20b9; {{$value3->MRP}}</b></p>
                                        </div>





                                    {{--<ul class="xxx-col-inner shipping_detail list-inline mt-2">--}}
                                        {{--<li class="list-inline-item">--}}
                                            {{--<p class="list_hed mb-0 font-size-md product-item-label">Offer</p>--}}
                                        {{--</li>--}}
                                        {{--<span class="colon d-inline-block mr-4">:</span>--}}

                                        <div class="list-inline-item">
                                            <h5 class="ofer_range mb-0">
                                                @if($value3->offer=='%')
                                                    No
                                                    <input type="hidden" name="m" id="m" value="0">
                                                @elseif($value3->offer=='NULL')
                                                    No
                                                    <input type="hidden" name="m" id="m" value="0">
                                                @elseif($value3->offer== 0)
                                                    No
                                                    <input type="hidden" name="m" id="m" value="0">
                                                    @else
                                                    {{$value3->offer}}
                                                    <input type="hidden" name="m" id="m" value="{{$value3->offer}}">%
                                                @endif
                                                off </h5> </div>
                                        </li>
                                    </ul>

                                <ul class="xxx-col-inner shipping-mode list-inline">
                                </ul>
                                <div class="quantity-wrapper">
                                    <div class="list-inline-item">
                                        <p class="list_hed mb-0 font-size-md product-item-label">Quantity</p>
                                    </div>
                                    <span class="colon d-inline-block mr-4">:</span>
                                    <div class="list-inline-item" >

                                        <div class="product_quantity">
                                            <div class="inner row mx-0 g-0 flex-nowrap">
                                                <div class="quantity-selectors d-flex align-content-center">
                                                    <div class="h-25 d-inline-block" style="width: 120px" >


                                                        <input type="number" id="n" name="quantity" value="1" min="1" max="{{$value3->stock}}" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div></div></div>


                                <ul class="xxx-col-inner pl-0 mb-0 mt-15">
                                    <li class="list-inline-item">
                                        <p class="shipping_status mb-0">
                                            <span class="font-size-md d-inline-block product-item-label">Stock Status</span>
                                        </p>
                                    </li>
                                    <span class="colon d-inline-block mr-4">:</span>
                                    <li class="list-inline-item">

                                        <p class="shipping_status mb-0">
                                            <span class="font-size-md text-success font-weight-bold">
                                               @if($value3->stock==0)
                                                    <i style="color: red">Out of stock</i>
                                                @else
                                                    <i style="color: green" class="shirt_text">In stock</i>

                                                    <p class="shipping_status mb-0">
                                            <span class="font-size-md text-success font-weight-bold">
                                                    Products available now: {{$value3->stock}}
                                                </span>
                                                @endif
                                            </span>
                                        </p>
                                </ul>

                                </li>

                                <ul class="xxx-col-inner shipping_detail list-inline mt-2">
                                    <li class="list-inline-item">
                                        <p class="list_hed mb-0 font-size-md product-item-label">Shipping</p>
                                    </li>
                                    <span class="colon d-inline-block mr-4">:</span>
                                    <li class="list-inline-item">
                                        <p class="shipping_status mb-0 font-size-md text-success font-weight-bold">
                                            @if($value3->free_delivery=='on')
                                                <i style="color: green">Free Delivery <input type="hidden" value=" 0" style="width: 30%"  readonly class="sh" id="sh"> </i>
                                            @else
                                                <i style="color: red">Shipping Charge Applicable - &#x20b9;<input type="text" value=" 20" style="width: 30%"   readonly  id="sh"> <br/>
                                                 </i>
                                            @endif


                                        </p>
                                    </li>
                                </ul>

                                 <ul class="xxx-col-inner shipping_detail list-inline mt-2">
                                    <li class="list-inline-item">
                                        <p class="list_hed mb-0 font-size-md product-item-label">Processing Time</p>
                                    </li>
                                        <span class="colon d-inline-block mr-4">:</span>
                                    <li class="list-inline-item">
                                        <p class="shipping_status mb-0 font-size-md font-weight-bold"> Ships in  few days </p>
                                    </li>
                                </ul>

                                <ul class="xxx-col-inner shipping_detail list-inline mt-2">
                                    <li class="list-inline-item">
                                        <p class="list_hed mb-0 font-size-md product-item-label">COD</p>
                                    </li>
                                    <span class="colon d-inline-block mr-4">:</span>

                                    <li class="list-inline-item">
                                        <p class="list_hed mb-0 font-size-md">
                                            @if($value3->cod== 'on')
                                                <i style="color: green">    Available</i>
                                            @else
                                                <i style="color: red">     Not Available</i>
                                            @endif
                                            <span class="shipping-tip position-relative" data-toggle="tooltip" data-placement="top" title="Cash on Delivery available for this product"><i class="ml-1 position-relative -mt-1" data-eva="question-mark-circle-outline" data-eva-height="14" data-eva-width="14"></i></span></p>
                                    </li>
                                </ul>


                                </div>

                            <ul class="xxx-col-inner shipping_detail list-inline mt-2">
                                <li class="list-inline-item">
                                    <p class="list_hed mb-0 font-size-md product-item-label">Amount to pay </p>
                                </li>
                                <span class="colon d-inline-block mr-4">:</span>

                                <li class="list-inline-item">
                                    <p class="list_hed mb-0 font-size-md">
                                    </p><input  type="text" readonly name="tot" class="form-control" id="tot" >

                                </li>
                            </ul>


                           <input type="submit" class="btn btn-warning" name="buynow" value="Buy Now" >
                            <button type="button" id="mycart" class="btn btn-light" data-toggle="modal" data-target="#myModal">Cart</button>



                            </form>
                                    <div class="container">
                                        <h1 class="fashion_taital"></h1>
                                        <div class="fashion_section_2">
                                             <div class="row">
                                                     <div class="col-sm-6">
                                                        {{--<div class="box_main">--}}
                                                         @if($value3->image2 == 'NULL')
                                                             @else
                                                            <img src="{{asset('uploads/'.$value3->image2)}} " width="100 " />
                                                         @endif
                                                         @if($value3->image3 == 'NULL')
                                                         @else
                                                            <img src="{{asset('uploads/'.$value3->image3)}} " width="100 " />
                                                         @endif
                                                         @if($value3->image4 == 'NULL')
                                                         @else
                                                         <img src="{{asset('uploads/'.$value3->image4)}} " width="100 " />
                                                         @endif
                                                         {{--</div>--}}
                                                     </div>
                                                 </div>
                                            </div></div>





                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>

    <div class="item-description description mb-5" align="center">

        <div id="product-specification" class="accordion">
            <div class="card mb-0 border-0">
                <div class="card-header collapsed relative d-flex justify-content-between align-items-center" data-toggle="collapse" href="#collapseOne" aria-expanded="true" style="background-color: orange">
                    <a class="card-title native-card mb-0 text-black font-weight-normal" align="center" >
                        Product Details
                    </a>
                    <div class="toggle-icon">
                        <i data-eva="plus-outline" class="icon-plus"></i>
                        <i data-eva="minus-outline" class="icon-minus"></i>
                    </div>
                </div>
                {{--@foreac/h($result6 as $value6)--}}
                <div id="collapseOne" class="collapse show" data-parent="#product-specification" >
                    <div class="card-body p-2">
                        <div id="profile-description">
                            <div class="text show-more-height">

                                <p class="font-size-md"><ul class="a-unordered-list a-vertical a-spacing-mini" style='margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); padding: 0px; font-family: "Amazon Ember", Arial, sans-serif;'>

                                    <li style=" overflow-wrap: break-word; margin: 0px;">
                                        <span class="a-list-item">  @if($value3->warranty == 0)
                                                No warranty
                                            @else
                                                {{$value3->warranty}} on the product from the date of invoice
                                            @endif
                                        </span></li></ul></p>
                                {{--@endforeach--}}

                                <h6>Unit Measurements</h6>
                                <ul>
                                    <li><b>Description : </b><br/>{{$value3->details}}</li>
                                    <li>Weight : <b>{{$value3->weight}}</b></li>
                                    <li>Height : <b>{{$value3->height}}</b></li>
                                    <li>Length: <b>{{$value3->length}}</b></li>
                                    <li>Width : <b> {{$value3->width}}</b></li>
                                    <li>Refund : <b> @if($value3->non_refund == 'on')
                                        <b>No Return</b>
                                                         @else
                                            <b>Refund on return available </b>
                                                         @endif
                                        </b></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-header relative d-flex justify-content-between align-items-center" style="background-color: orange" data-toggle="collapse" href="#collapseTwo" aria-expanded="true">
                    <a class="card-title native-card mb-0 text-black font-weight-normal">
                        Customer Reviews
                    </a>

                    <div class="toggle-icon">
                        <i data-eva="plus-outline" class="icon-plus"></i>
                        <i data-eva="minus-outline" class="icon-minus"></i>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show" data-parent="#product-specification" >
                    <div class="card-body p-2">
                        <div class="row m-0">
                            <div class=" prd_1 sorting">

                                <form name="reviewfrm" method="post" action="/reviewgive">
                                    @csrf


                                    <input type="hidden" name="prod_id" value="{{$value3->prod_id}}">
                                    {{--<textarea class="form-control" aria-label="comment" name="comment" id="comment"></textarea>--}}
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Valuable Comments" name="comment" id="comment" aria-label="comment" aria-describedby="basic-addon2">
{{--<input type="submit" value="add" class="form control">--}}
                                    </div>

                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                                    <div class="container d-flex justify-content-center mt-100">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {{--<div class="card">--}}
                                                    <div class="card-body text-center">
                                                        <span class="myratings" hidden="hidden" >0</span>



                                                            <input type="radio" class="star" id="star1" name="rating" value="1"  hidden="hidden"/>
                                                            <label class="fa fa-star" style="background-color: #ffff00" for="star1" title="Sucks big time - 1 star"></label>

                                                            <input type="radio" id="star2" class="star" name="rating" value="2"  hidden="hidden"/>
                                                            <label class="fa fa-star" style="background-color: #ffff00" for="star2" title="Kinda bad - 2 stars"></label>


                                                            <input type="radio" id="star3" class="star" name="rating" value="3"  hidden="hidden" />
                                                            <label class="fa fa-star" style="background-color: #ffff00"  for="star3" title="Meh - 3 stars"></label>
                                                            </label> <input type="radio" class="star" id="star4" name="rating" value="4" hidden="hidden" />
                                                            <label class="fa fa-star" style="background-color: #ffff00" for="star4" title="Pretty good - 4 stars"></label>
                                                            <input type="radio" id="star5" class="star" name="rating" value="5" hidden="hidden" />
                                                            <label class="fa fa-star" style="background-color: #ffff00" for="star5" title="Awesome - 5 stars"></label>
                                                            <input type="radio" id="star5" class="star" name="rating" value="5" hidden="hidden"  >

                                                                <input type="text"  class="form control"  id="rat" readonly>
                                                        <br/>                                                        <br/>

                                                        <input type="submit" value="Send" class="btn btn-warning">
                                                            <script>
                                $(document).ready(function() {
                                    $('.star').click(function(){
                                        var s = $(this).val()
                                        $('#rat').val(s)
//                                        var pid = $('#prod_id').val()
//                                        alert(pid);
//                                        $.ajax({
//
//                                            url:'/reviewgive/' + pid,
//                                            method: 'get',
//                                            cache: false,
//                                            data: {
//                                                rating: s,
//                                                prod_id: pid
//                                            },
//                                            success: function(response) {
//                                                console.log(response);
//                                            }
//                                        });
//                                        location.reload(true);
                                    });
                                });
                            </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {{--</div>--}}
                                    <script type="text/css">
                                        @import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
                                        @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

                                        body {
                                            background-color: orange;
                                            font-family: 'Calibri', sans-serif !important
                                        }

                                        fieldset,
                                        label {
                                            margin: 0;
                                            padding: 0
                                        }

                                        body {
                                            margin: 20px
                                        }

                                        h1 {
                                            font-size: 1.5em;
                                            margin: 10px
                                        }

                                        .rating {
                                            border: none;
                                            margin-right: 49px
                                        }

                                        .myratings {
                                            font-size: 85px;
                                            color: green
                                        }

                                        .rating>[id^="star"] {
                                            display: none
                                        }

                                        .rating>label:before {
                                            margin: 5px;
                                            font-size: 2.25em;
                                            font-family: FontAwesome;
                                            display: inline-block;
                                            content: "\f005"
                                        }

                                        .rating>.half:before {
                                            content: "\f089";
                                            position: absolute
                                        }

                                        .rating>label {
                                            color: #ddd;
                                            float: right
                                        }

                                        .rating>[id^="star"]:checked~label,
                                        .rating:not(:checked)>label:hover,
                                        .rating:not(:checked)>label:hover~label {
                                            color: #FFD700
                                        }

                                        .rating>[id^="star"]:checked+label:hover,
                                        .rating>[id^="star"]:checked~label:hover,
                                        .rating>label:hover~[id^="star"]:checked~label,
                                        .rating>[id^="star"]:checked~label:hover~label {
                                            color: #FFED85
                                        }

                                        .reset-option {
                                            display: none
                                        }

                                        .reset-button {
                                            margin: 6px 12px;
                                            background-color: rgb(255, 255, 255);
                                            text-transform: uppercase
                                        }

                                        .mt-100 {
                                            margin-top: 100px
                                        }

                                        .card {
                                            position: relative;
                                            display: flex;
                                            width: 350px;
                                            flex-direction: column;
                                            min-width: 0;
                                            word-wrap: break-word;
                                            background-color: #fff;
                                            background-clip: border-box;
                                            border: 1px solid #d2d2dc;
                                            border-radius: 11px;
                                            -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
                                            -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
                                            box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
                                        }

                                        .card .card-body {
                                            padding: 1rem 1rem
                                        }

                                        .card-body {
                                            flex: 1 1 auto;
                                            padding: 1.25rem
                                        }

                                        p {
                                            font-size: 14px
                                        }

                                        h4 {
                                            margin-top: 18px
                                        }

                                        .btn:focus {
                                            outline: none
                                        }

                                        .btn {
                                            border-radius: 22px;
                                            text-transform: capitalize;
                                            font-size: 13px;
                                            padding: 8px 19px;
                                            cursor: pointer;
                                            color: #fff;
                                            background-color: #D50000
                                        }

                                        .btn:hover {
                                            background-color: #D32F2F !important
                                        }
                                    </script>
                                    <script type="text/javascript">
                                        $(document).ready(function(){

                                            $("input[type='radio']").click(function(){
                                                var sim = $("input[type='radio']:checked").val();
//alert(sim);
                                                if (sim<3) { $('.myratings').css('color','red'); $(".myratings").text(sim); }else{ $('.myratings').css('color','green'); $(".myratings").text(sim); } }); });
                                    </script>
                                    @foreach($result10 as $value9)
                                        <table class="no bordered" >
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td>   {{$value9->username}} -
                                                </td>
                                                <td> <b>{{$value9->comment}}</b></td>
                                                <td style="color: orange">
                                                    {{--<b style="color: orange">--}}
                                                    @if($value9->rating == 5)
                                                        {{--{{$value9->rating}} / 5</b>--}}
                                                        <i  class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg>
                                                        <i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg><i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg><i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg><i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg>
                                                    @elseif($value9->rating == 4)
                                                        <i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg> <i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg> <i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg> <i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg>
                                                    @elseif($value9->rating == 3)
                                                        <i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg> <i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg> <i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg>
                                                    @elseif($value9->rating == 2)
                                                        <i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg> <i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg>
                                                    @elseif($value9->rating == 1)
                                                        <i class="bi bi-star"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                        </svg>
                                                    @else
                                                    @endif</td>
                                            </tr>

                                        </table>

                                    @endforeach
                                   </div>
</form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="card-header relative d-flex justify-content-between align-items-center" style="background-color: orange" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                    <a class="card-title native-card mb-0 text-black font-weight-normal">
                        Question & Answers
                    </a>
                    <div class="toggle-icon">
                        <i data-eva="plus-outline" class="icon-plus"></i>
                        <i data-eva="minus-outline" class="icon-minus"></i>
                    </div>
                </div>
                <form name="quesans" method="post" action="/quesans">
                    @csrf

                    <input type="hidden" name="prod_id" value="{{$value3->prod_id}}">

                    <div id="collapseThree" class="collapse" data-parent="#product-specification" >
                    <div class="card-body p-2">
                        <div class="row m-0">
                            {{--<h5 class="mb-4"> Question and Answers</h5>--}}
                            <div class="review_cust">
                                <div class="desc">
                                    {{--<h4>--}}
                                    <br/>
                                        <span class="text-left">Ques : <b>Is it a good product ?? </b></span>
                                    <br/>

                                    <div class="input-group mb-4">
                                        <input type="hidden" name="prod_id" value="{{$value3->prod_id}}">

                                        Your    Ans :   <input type="text" class="form-control" name="ans" placeholder="Answer"  id="ans" aria-label="ans" aria-describedby="basic-addon3">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="submit">Add </button>
                                        </div>
                                    </div>
                                   <b style="color: lightsalmon">  Other Opinions :</b> <br/>
                                    @foreach($result11 as $value10)
                                        {{$value10->username}} -
                                        {{--<b>{{$value9->ques}}</b>--}}
                                     <b>{{$value10->ans}}</b>
                                        <br/>
                                    @endforeach

                                    {{--<span class="text-left">A: <input type="text"> </span>--}}
                                    <br/>

                                    <div class="input-group mb-3">
                                        <input type="hidden" name="prod_id" value="{{$value3->prod_id}}">

                                        Ques : <input type="text" class="form-control" name="ques" placeholder="Ask Question about product"  id="ques" aria-label="comment" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="submit">Add </button>
                                        </div>
                                    </div>
                                   Your Ques: @foreach($result11 as $value10)

                                        {{--<b>{{$value9->ques}}</b>--}}
                                        <b>{{$value10->ques}}</b>
                                        <br/>
                                    @endforeach
                                    <br/>
                                    <div class="input-group mb-4">
                                        <input type="hidden" name="prod_id" value="{{$value3->prod_id}}">

                                         Answer :   <input type="text" class="form-control" name="ansr" placeholder="Answer"  id="ansr" aria-label="ansr" aria-describedby="basic-addon4">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="submit">Add </button>
                                        </div>
                                    </div>

                                    <b style="color: lightsalmon"> Answer to your Question  </b> <br/>
                                    @foreach($result11 as $value10)
                                        {{$value10->username}} -
                                        {{--<b>{{$value9->ques}}</b>--}}
                                        <b>{{$value10->ansr}}</b>
                                        <br/>
                                    @endforeach
</div></div></div></div></div>
                                    </form>


                                </div>
                            </div>
                        </div>

    @foreach($result3 as $pro)

        <!-- Modal -->
          <div class="modal-dialog">
                <div class="modal fade" id="myModal" role="dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header"  >
                        <h4 class="modal-title">{{$pro->prod_name}}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <form method="post" class="frm" action="/cart/{{$pro->prod_id}}">
                            @csrf
                            <table>
                                <tr>

                                    <input type="hidden" name="m-userid" id="userid" class="form-control" value="{{session('uid')}}">
                                    <input type="hidden" name="m-prod_id" class="form-control" id="prod_id" value="{{$pro->prod_id}} "></td>
                                    <td> Quantity :</td>
                                    <td>  <input type="number" name="m-quantity" class="form-control" id="m-quantity" value="1" min="1" max="{{$pro->stock}}">
                                    </td>
                                    <td><input type="hidden" name="m-sell_price" class="form-control" id="m-sell_price" value="{{$pro->sell_price}}"></td>
                                    <td><input type="hidden" name="m-offerprice" class="form-control" id="m-offerprice" value=""></td>
                                    <td><input type="hidden" name="m-coin" class="form-control" id="m-coin" ></td>

                                </tr>

                                <tr>
                                    <td>
                                        &nbsp; Total : </td>
                                    <td><input type="text" name="m-total" id="m-total" class="form-control" value="">


                                    </td>
                                </tr>
                            </table>


                    <div class="modal-footer">
                        <input type="submit" class="btn btn-warning" value="Add to Cart">
                    </div>
            </form>

            </div>
            </div>

            </div>
            </div>

            @endforeach

            <script>

            $(document).ready(function(){
                // main quantity change function
                var t= $('#sp').val();

                var b =  parseInt(parseInt(t)/150)*2;

                $('#b').val(b); //display coins into text field
                $('#coins').html(b);

            $('#n').change(function(){

                var pr= $('#offerprice').val();
                var qnty=$('#n').val();
//                alert(qnty);

                var total= parseInt(pr)*parseInt(qnty);
                $('#total').val(total);
            });
            //Add to cart function
            $('#mycart').click(function(){
                //get value from the form
                var qnty=$('#n').val();
                var tot=$('#tot').val();
                var cn=$('#b').val();
                var offer=$('#offerprice').val();

                $('#m-quantity').val(qnty); //view selected qnty to modal
                $('#m-total').val(tot); //view total to modal
                $('#m-coin').val(cn);
                $('#m-offerprice').val(offer);
                //  confirm the cart function
                $('#m-quantity').change(function(){
//                    $('#m-offerprice').val(offerprice);
                    var mqnty=  $('#m-quantity').val();
                    var pr= $('#m-offerprice').val();
                    var total= parseInt(pr)*parseInt(mqnty);
                    $('#m-total').val(total);
                });

            });




          $('#n').on('click',function(){
//              alert("hi");

              var v = $('#n').val()
                var m = v - 1 ;
              $('#n').val(m);
              var sp = $('#offerprice').val()
//                alert(sp);
              var total=  m * parseInt(sp) ;
              $('#total').val(total);

          });

            $('#n').on('click',function(){
//                              alert("hi");

                var ad = $('#n').val()


                var a = parseInt(ad) + 1 ;

                $('#n').val(a);
                var sp = $('#offerprice').val()
//                alert(sp);
                var total= a * parseInt(sp);
//                alert(total);
                $('#tot').val(total);


            });

//            $('#n').on('click',function(){
//              alert("hi");
                var m = $('#m').val()
//                                alert(m);

                var sp = $('#sp').val()

                var o = m * parseInt(sp);

                var off= o / 100 ;

                var offer = parseInt (sp) - off ;
                var num = parseInt(offer);

//                                alert(offer);
                $('#offerprice').val(num);
                 var sh = $('#sh').val()
                var ch = parseInt(num) + parseInt(sh);
            $('#tot').val(ch);

            });

//            });


    </script>
@endsection
