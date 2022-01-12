
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
    <div class="header_box">
        <div class="lang_box ">
            <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                <img src="/images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu ">
                <a href="#" class="dropdown-item">
                    <img src="/images/flag-france.png" class="mr-2" alt="flag">
                    French
                </a>
            </div>
        </div>
        <div class="login_menu">
            <ul>
                <li><a href="/cart">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="padding_10">Cart</span></a>
                </li>
                @if (session()->has('uid'))
                    <li><a href="/">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="padding_10">display name</span></a>
                    </li>

                    <li><a href="#">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="padding_10">Logout</span></a>
                    </li>
                @else
                    <li><a href="#">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="padding_10">Profile</span></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    </div>
    </div>
    </div>

    <div class="banner_section layout_padding">
        <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="/images/banner.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="/images/banner1.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="/images/banner2.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="/images/banner3.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>


    <!-- banner bg main start -->


    {{--@foreach($result3 as $value3)--}}
    {{--<div class="fashion_section">--}}
    {{--<div id="main_slider" class="carousel slide" data-ride="carousel">--}}
    {{--<div class="carousel-inner">--}}
    {{--<div class="carousel-item active">--}}
    {{--<h5 class="fashion_taital">{{$value3->prod_name}}</h5>--}}
    {{--{{$value3->image}}--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}

    <!-- banner bg main end -->
    <!-- fashion section start -->

    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <div class="container">

                    <h1 class="fashion_taital"></h1>
                    <div class="fashion_section_2">
                        <div class="row">


                            @foreach($result3 as $value3)
                                <div id="my_slider" class="carousel slide" data-ride="carousel">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">{{$value3->prod_name}}</h4>
                                        <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img">
                                            {{--<img src="images/tshirt-img.png">--}}
                                            {{--{{$value->image}}--}}
                                            <img src="{{asset('uploads/'.$value3->image)}} " />
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="/seemore/{{$value3->prod_id}}">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    </div>


    <!-- copyright section start -->



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
                    alert('hi');
                });

            });
        });
    </script>
@endsection