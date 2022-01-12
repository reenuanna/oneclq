<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 29-03-2021
 * Time: 20:25
 */
?>
@extends('user.userheader')

@section('body')




    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            {{--&nbsp;  <h4 ><i data-eva="flash"></i> Offer products </h4>--}}
            <div class="section-title d-flex order-lg-1 align-items-center">
                <h4 class="mb-0 deals d-flex align-items-center position-relative"><i data-eva="sun"></i> Offer products</h4>
            </div>
            <div class="carousel-item active" style="background-color: orange">

                <div class="container">

                    <h1 class="fashion_taital"></h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            @foreach($result3 as $value3)
                                @if($value3->offer == 0)

                                    @else
                                    <div class="col-lg-2 col-sm-2">
                                        <div class="box_main" style="height: 400px">

                                            <span class="product-new-label" style="background-color: orange"> &nbsp;{{$value3->offer}}% &nbsp;</span>
                                            <h4 class="shirt_text" ><a href="/seemore/{{$value3->prod_id}}">{{$value3->prod_name}}</a></h4>
                                            <p class="price_text">Price  <span style="color: #262626;">{{$value3->sell_price}}</span></p>
                                            <div class="tshirt_img">

                                                <div class="seemore_bt">  <a href="/seemore/{{$value3->prod_id}}"> <img src="{{asset('uploads/'.$value3->image)}} "  width="90%" /></a>
                                                </div>
                                                <div class="btn_main">

                                                    {{--<div class="buy_bt"><a href="/buynow/{{$value3->prod_id}}">Buy Now</a></div>--}}
                                                    <div class="card-body card-body-hidden p-2">
                                                        <a href="/seemore/{{$value3->prod_id}}" tabindex="0">
                                                            <button class="btn btn-black btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast" tabindex="0">View Product</button>
                                                        </a>
                                                    </div>
                                                    {{--<div class="seemore_bt"><a href="/seemore/{{$value3->prod_id}}">See More</a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{----}}

    </div>

    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            &nbsp;  <h4 ><i data-eva="flash"></i> All Products</h4>

            <div class="carousel-item active" style="background-color: orange">

                <div class="container">

                    <h1 class="fashion_taital"></h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            @foreach($result3 as $value3)
                                @if($value3->status == 1)
                            <div class="col-lg-2 col-sm-2">
                                <div class="box_main" style="height: 400px">
                                    <h4 class="shirt_text" ><a href="/seemore/{{$value3->prod_id}}">{{$value3->prod_name}}</h4>
                                    <p class="price_text">Price  <span style="color: #262626;">{{$value3->sell_price}}</span></p>
                                    <div class="tshirt_img">
                                        {{--<img src="images/tshirt-img.png">--}}
                                        {{--{{$value->image}}--}}
                                        <div class="seemore_bt">  <a href="/seemore/{{$value3->prod_id}}"> <img src="{{asset('uploads/'.$value3->image)}} " width="90%" /></a>
                                    </div>
                                    <div class="btn_main">
                                        <div class="card-body card-body-hidden p-2">
                                            <a href="/seemore/{{$value3->prod_id}}" tabindex="0">
                                                <button class="btn btn-black btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast" tabindex="0">View Product</button>
                                            </a>
                                        </div>
                                        {{--<div class="buy_bt"><a href="/buynow/{{$value3->prod_id}}">Buy Now</a></div>--}}
                                        {{--<div class="seemore_bt"><a href="/seemore/{{$value3->prod_id}}">See More</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                                @else
                                @endif
                            @endforeach

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        {{--{{$result3->links()}}--}}
</div>


    <div class="section-banner three-banner-section mb-15 pt-15">
        <div class="container">
            <div class="d-block border-radius-small">
                <div class="row mini-gutter">
                    <div class="col-md-4 col-sm-12 col-12 pb-15 pb-lg-0">

                        <div class="banner_wrapper h-100 shadow">
                            <a href="/" class="x-banner x-banner-style-1" target="_blank">
                                <!-- <div></div> -->
                                <img src="/images/bannesr.jpg" class="img-fluid img-thumbnail rounded lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 pb-15 pb-lg-0">

                        <div class="banner_wrapper h-100 shadow">
                            <a href="/" class="x-banner x-banner-style-1"  target="_blank">
                                <img src="/images/banner3.jpg" class="img-fluid img-thumbnail rounded lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 pb-15 pb-lg-0">
                        <div class="banner_wrapper h-100 shadow">
                            <a href="/" class="x-banner x-banner-style-1"  target="_blank">
                                <img src="/images/banner2.jpg" class="img-fluid img-thumbnail rounded lazyload">
                            </a>
                        </div>
                    </div>


                    {{--<div class="col-md-12 col-sm-12 col-12 pb-0 pt-15">--}}
                        {{--<div class="banner_wrapper h-100 w-100 shadow">--}}
                            {{--<a href="/"  target="_blank" class="x-banner x-banner-style-1" >--}}
                                {{--<img src="/images/banner5.jpg" class="img-fluid">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="footer_top bg-white py-4 shadow">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-lg-2 mb-4 mb-lg-0">
                    <div class="row justify-content-center justify-content-lg-start">
                        <div class="col-5 col-md-3 col-lg-10 footer-logo">
                            <div class="logo-container">
                                <img src="/images/logo.png" width="100" class="img-fluid"/><b>Onecliq</b>
                                <p style="font-size: 10px">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-10">
                    <div class="row row-cols-5">
                        <div class="col-lg-auto col-md-3 col-6 col col-mobile-half mb-4 mb-md-0">
                            <div class="special_detail text-center">
                                <div class="widget-icon">
                                    <img src="https://dailycliq.com/app/web/images/footer/like.svg" class="img-fluid" alt="" srcset="">
                                </div>
                                <p class="hed">Quality & Savings</p>
                                <small class="text-muted leading-tight d-block mt-1">Excellent quality control<br>and affordable prices</small>
                                <!-- <p class="det">Lorem Ipsum is simply dummy</p> -->
                            </div>
                        </div>
                        <div class="col-lg-auto col-md-3 col-6 col col-mobile-half mb-4 mb-md-0">
                            <div class="special_detail text-center">
                                <div class="widget-icon">
                                    <img src="https://dailycliq.com/app/web/images/footer/trolley.svg" class="img-fluid" alt="" srcset="">
                                </div>
                                <p class="hed">Express Shipping</p>
                                <small class="text-muted leading-tight d-block mt-1">Convenient door <br>to door delivery </small>
                                <!-- <p class="det">Lorem Ipsum is simply dummy</p> -->
                            </div>
                        </div>
                        <div class="col-lg-auto col-md-3 col-6 col col-mobile-half mb-4 mb-md-0">
                            <div class="special_detail text-center">
                                <div class="widget-icon">
                                    <img src="https://dailycliq.com/app/web/images/footer/shield.svg" class="img-fluid" alt="" srcset="">
                                </div>
                                <p class="hed">Payment Security</p>
                                <small class="text-muted leading-tight d-block mt-1">Multiple payment methods, <br>No cost EMI</small>
                                <!-- <p class="det">Lorem Ipsum is simply dummy</p> -->
                            </div>
                        </div>
                        <div class="col-lg-auto col-md-3 col-6 col col-mobile-half mb-4 mb-md-0">
                            <div class="special_detail text-center">
                                <div class="widget-icon">
                                    <img src="https://dailycliq.com/app/web/images/footer/24-hours.svg" class="img-fluid" alt="" srcset="">
                                </div>
                                <p class="hed">Worry-free after sale</p>
                                <small class="text-muted leading-tight d-block mt-1">24/7 customer service <br>and product warranties.</small>
                                <!-- <p class="det">Lorem Ipsum is simply dummy</p> -->
                            </div>
                        </div>
                        <div class="col-lg-auto col-md-3 col-6 col col-mobile-half mb-4 mb-md-0">
                            <div class="special_detail text-center">
                                <div class="widget-icon">
                                    <img src="https://dailycliq.com/app/web/images/footer/box.svg" class="img-fluid" alt="" srcset="">
                                </div>
                                <p class="hed">Easy Return</p>
                                <small class="text-muted leading-tight d-block mt-1">Provide 100℅ <br>purchase protection</small>
                                <!-- <p class="det">Lorem Ipsum is simply dummy</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <section class="newsletter py-4 py-lg-5">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-6">
                        <div class="newsletter-box d-flex align-items-center">
                            <img src="https://dailycliq.com/app/web/images/newsletter.png">
                            <div class="newsletter-box-text">
                                <h3 class="net mb-0">Signup For Newsletter</h3>
                                <small>We'll never share your email address with a third-party</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 offset-lg-1 col-lg-5">
                        <div class="input-group mt-2">
                            <input type="email" class="form-control" placeholder="Enter your email">
                  <span class="input-group-btn">
                      <button class="btn btn-subscribe" type="submit">Subscribe</button>
                  </span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    <script>

    $(document).ready(function(){
        $("#cat").on('change', function()
        {
            var catid=$("#cat").val();
//                alert(catid);    // alert('hi');

            $.ajax({
                type:"get",
                url:"/prdSubCat/"+catid,
                success:function(result)
                {
//                        alert(result);
                    $('#sub').html(result);
                }
            });
            $("#subs").show();
        });
        $("#sub").on('change',function(){

            $("#prd").show();
        });
        $("#sub").on('click',function(){

            $("#prd").show();
        });
        $("#cats").mouseover(function(){
            $(this).hover(function(){
//                alert('hi');
            });

        });
    });
</script>
    @endsection