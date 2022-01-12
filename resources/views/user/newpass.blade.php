<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 21-05-2021
 * Time: 14:17
 */
        ?>

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
    <link rel="icon" href="//images/fevicon.png" type="image/gif" />
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
    <link rel="stylesoeet" href="//css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="/https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
        </div>
    </div>
</div>

<div class="header__middle">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-white p-0">
            <button class="navbar-toggler" type="button" id="mobile_menu_trigger" data-toggle="modal">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="https://dailycliq.com/home" class="navbar-brand block">
                <div class="logo-container">
                    <img src="/images/logo.png" width="100" align="center" class="img-fluid"/><b>Onecliq</b>
                    <p style="font-size: 10px">
                        <i><b>Best Online Shopping In Kerala Regional</b></i>
                    </p>
                </div>
            </a>
        </nav>
    </div>
</div>
<p></p>
<div class="header_section">
    <div class="container">
        <div class="containt_main">
            {{--</div>--}}
            <div align="center" class="login">


            </div>
        </div>
        <div class="banner_bg_main">
            <!-- header top section start -->

            <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
                    <div class="user_card">
                        <div class="d-flex justify-content-center">
                            <div class="brand_logo_container">
                                {{--<a href="/"><img src="/images/logo.png" width="10%" class="brand_logo" alt="Logo">OneCliq</a>--}}
                            </div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                            <div class="fashion_section">
                                <div class="container">
                                    <div class="containt_main">
                                        {{--</div>--}}
                                        <div class="login">
                                        </div></div></div></div></div>

                    <form method="post" action="/updatepass" style="text-align: center;background-color: cornsilk" >
                        @csrf
                        <fieldset style="alignment: center">
                            <p></p>
                            <legend>Password Resetting</legend>
                                {{--<h3>SignIn</h3><p></p>--}}
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
</span>
                                </div>
                                <input type="email" class="form-control" placeholder="Enter email or mobile" name="email"> </div>
                                @error("email")
                                <p style="color:red">{{$errors->first("email")}}
                                @enderror

                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number , one uppercase , lowercase letter , and at least 6 or more characters"  name="password" id="password" placeholder="Enter your Password">
                            </div>

                                @error("password")
                                <p style="color:red">{{$errors->first("password")}}
                                    @enderror
                                    <br/><h6><input type="checkbox" onclick="myFunction()" >Show Password</h6>
                                <p></p>  <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                            <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number , one uppercase , lowercase letter , and at least 6 or more characters"  name="cpassword" id="cpassword" placeholder="Enter confirm  Password">
                            </div>

                            @error("cpassword")
                            <p style="color:red">{{$errors->first("cpassword")}}
                                @enderror
                                <br/><h6><input type="checkbox" onclick="myFunctions()" >Show Password</h6>

                            <p></p>
                                <input type="submit" class="btn btn-warning btn-lg btn-block" value="Reset" id="c" style="background-color: orange">
                                <p></p> </fieldset>
                    </form>


                </center>
                <br><br>
            </div>
        </div>

</div></div>
<br/><br/><br/><br/><br/>
{{--<div class="copyright_section">--}}
    {{--<div class="container">--}}
        {{--<p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://www.iroidtechnologies.com/">Iroid Technologies</a>--}}
            {{--<br>--}}
            {{--&copy;Anjali Sethumadhavan--}}
        {{--</p>--}}
    {{--</div>--}}
{{--</div>--}}
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function myFunctions() {
        var x = document.getElementById("cpassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
{{--@endsection--}}