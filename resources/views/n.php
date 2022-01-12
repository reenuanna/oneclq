<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 21-04-2021
 * Time: 13:51
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title> Best Online Shopping In India | Kerala Shopping | Regional </title>
    <meta name="description" content=" Discover the hidden gems for every taste and occasion | Online Shopping | Kerala | Mobiles | Fashion | Express Shipping • Easy Ret... lll ">
    <meta name="keywords" content=" online shopping, onecliq, ecommerce, best deal for you, shop online, Kerala products, lifestyle, baby care, fashion, Mobiles, home decore ">
    <meta property="og:site_name"  content="onecliq"/>
    <meta property="og:description" content=" Discover the hidden gems for every taste and occasion | Online Shopping | Kerala | Mobiles | Fashion | Express Shipping • Easy Ret... "/>
    <meta property="og:type" content="page">
    <meta property="og:title" content=" Best Online Shopping In India | Kerala Shopping | Regional ">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesoeet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<div class="banner_bg_main">
    <!-- header top section start -->

    <div class="header_section_top">
        {{--<h4 style="color: #ffffff">phone No.:96302--}}
            {{--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
            {{--&nbsp;&nbsp;&nbsp;--}}
            {{--Vendor login</h4>--}}
        {{--</div>--}}

    <div class="row">
        <div class="col-sm-3">
            <div class="logo"><a href="/"><img src="/images/logo.png" width="80"><b>OneCliq</b></a>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="custom_menu">
                <ul>
                    <li><a href="#">Best Sellers</a></li>
                    <li><a href="#">Gift Ideas</a></li>
                    <li><a href="#">New Releases</a></li>
                    <li><a href="#">Today's Deals</a></li>
                    <li><a href="#">Customer Service</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!-- header top section start -->
<!-- logo section start -->
<div class="logo_section">

</div>
<!-- logo section end -->
<!-- header section start -->
<div class="header_section">
    <div class="container">
        <div class="containt_main">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                @foreach($result1 as $value1)

                <a href="/cat/{{$value1->cat_id}}">{{$value1->cat_brand}}</a>

                {{--<a href="fashion.html">Fashion</a>--}}
                {{--<a href="electronic.html">Electronic</a>--}}
                {{--<a href="jewellery.html">Jewellery</a>--}}

                @endforeach
            </div>
            <span class="toggle_icon" onclick="openNav()"><img src="/images/toggle-icon.png"></span>

            {{--<div class="dropdown">--}}
                {{--<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"  aria-haspopup="true" aria-expanded="false"><a href="/user"> All Category</a>--}}
                    {{--</button>--}}



                {{--@foreach($result1 as $value1)--}}
                {{--<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
                    {{--<a href="/cat/{{$value1->cat_id}}">{{$value1->cat_brand}}</a>--}}
                    {{--<a class="dropdown-item" href="#">Action</a>--}}
                    {{--<a class="dropdown-item" href="#">Another action</a>--}}
                    {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
                {{--</div>--}}
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" style="background-color: orange" data-toggle="dropdown" name="cat"> shop all Categories
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    @foreach($result1 as $value1)
                    <li id="cats"><a  href="/cat/{{$value1->cat_id}}">{{$value1->cat_brand}}</a></li>

                    @endforeach
                </ul>
            </div>
            <div class="main">
                <!-- Another variation with a button -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Keyword here">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>

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
                    <ul style="background-color:orange">
                        <li><a href="/cart">
                                <i class="fa fa-shopping-cart" aria-hidden="true" ></i>
                                <span class="padding_10">Cart</span></a>
                        </li>
                        <li><a href="/userprofile">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="padding_10">Profile</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- header section end -->
<!-- banner section start -->

<!-- banner section end -->
<br>
</div>

@yield('body')
<body>
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://www.iroidtechnologies.com/">Iroid Technologies</a>
            {{--<br>--}}
            {{--&copy;Anjali Sethumadhavan--}}
        </p>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.0.0.min.js"></script>
<script src="/js/plugin.js"></script>
<!-- sidebar -->
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/custom.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

</script>
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
</body>
</html>