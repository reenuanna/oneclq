





<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 24-05-2021
 * Time: 10:19
 */
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title> Best Online Shopping In India | Kerala Shopping | Regional </title>
{{--<meta name="description" content=" Discover the hidden gems for every taste and occasion | Online Shopping | Kerala | Mobiles | Fashion | Express Shipping • Easy Ret... lll ">--}}
{{--<meta name="keywords" content=" online shopping, onecliq, ecommerce, best deal for you, shop online, Kerala products, lifestyle, baby care, fashion, Mobiles, home decore ">--}}
{{--<meta property="og:site_name"  content="onecliq"/>--}}
{{--<meta property="og:description" content=" Discover the hidden gems for every taste and occasion | Online Shopping | Kerala | Mobiles | Fashion | Express Shipping • Easy Ret... "/>--}}
{{--<meta property="og:type" content="page">--}}
{{--<meta property="og:title" content=" Best Online Shopping In India | Kerala Shopping | Regional ">--}}

{{--<meta name="keywords" content="">--}}
{{--<meta name="description" content="">--}}
{{--<meta name="author" content="">--}}
<!-- bootstrap css -->
{{--<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">--}}
{{--<!-- style css -->--}}
<link rel="stylesheet" type="text/css" href="/css/style.css">
{{--<!-- Responsive-->--}}
{{--<link rel="stylesheet" href="/css/responsive.css">--}}
{{--<!-- fevicon -->--}}
<link rel="icon" href="//images/fevicon.png" type="image/gif" />
{{--<!-- Scrollbar Custom CSS -->--}}
{{--<link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">--}}
{{--<!-- Tweaks for older IEs-->--}}
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
{{--<!-- fonts -->--}}
{{--<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">--}}
{{--<!-- font awesome -->--}}
{{--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
<!--  -->
<!-- owl stylesheets -->
{{--<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">--}}
{{--<link rel="stylesheet" href="/css/owl.carousel.min.css">--}}
{{--<link rel="stylesoeet" href="//css/owl.theme.default.min.css">--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">--}}
{{--<script src="/https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="/https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="/https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/logincss.css">

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


<p></p>
<div class="header_section">
    <div class="container">
        <div class="containt_main">
            {{--</div>--}}
            <div align="center" class="login">


            </div>
        </div></div></div>
</head>
<!--Coded with love by Mutiullah Samim-->
<body style="background-color: orange">
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    {{--<a href="/"><img src="/images/logo.png" width="10%" class="brand_logo" alt="Logo">OneCliq</a>--}}
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form method="post" action="/view">
                    @csrf
                    @if (session('message')) <p style="color:red"> {{ session('message') }} </p> @endif
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control input_user" value="" placeholder="Enter Your email">

                    </div>
                    @error("email")
                    <p style="color:green">{{$errors->first("email")}}
                    @enderror
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control input_pass" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number , one uppercase , lowercase letter , and at least 6 or more characters"  name="password" id="password" placeholder="Enter your Password">
                    </div>
                        @error("password")
                        <p style="color:green">{{$errors->first("password")}}
                        @enderror


                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{--<div class="form-group">--}}
                        {{--<div class="custom-control custom-checkbox">--}}
                            {{--<input type="checkbox"  onclick="myFunction()">Show Password</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<br/><h6><input type="checkbox" onclick="myFunction()" >Show Password</h6>--}}
                    {{--<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input"  onclick="myFunction()" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Show Password</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <input type="submit" name="button" class="btn login_btn" id="c" value="Login">
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Don't have an account? <a href="/viewreg" class="ml-2">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="/userfpass">Forgot your password?</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="/vendor">Login as Vendor</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

</html>