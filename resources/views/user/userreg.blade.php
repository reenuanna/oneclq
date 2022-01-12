<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 22-04-2021
 * Time: 20:08
 */

?>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!-- basic -->
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
    <p></p>

</div>
</head>
<div class="header_section">
    <div class="container">
        <div class="containt_main">
            {{--</div>--}}
            <div align="center" class="login">

<br/>
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


                    <form method="post" action="/userreg" style="text-align: center;background-color: cornsilk;width: 100%" >
                        @csrf
                        <fieldset style="alignment: center">
                            <h3>Create Account</h3><p></p>
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
</span>
                                </div>
                            <input type="text" class="form-control" placeholder="Your Name" name="name">
                            </div>
                            @error("name")
                            <p style="color:red">{{$errors->first("name")}}
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                </div>

                            <input type="text" class="form-control" value="91"  name="mobile" id="mobile" placeholder=" your mobile number">
                            </div>
                            @error("mobile")
                            <p style="color:red">{{$errors->first("mobile")}}
                            @enderror


                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                            <input type="email" class="form-control" name="email" id="email" placeholder="your email">
                            </div>
                            @error("email")
                            <p style="color:red">{{$errors->first("email")}}
                            @enderror

                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                            <input type="password" class="form-control"  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number , one uppercase , lowercase letter , and at least 6 or more characters"  name="password" id="password" placeholder="Enter you Password">
                            </div>
                                @error("password")
                            <p style="color:red">{{$errors->first("password")}}
                            @enderror

                                <br/><h6><input type="checkbox" onclick="myFunction()" >Show Password</h6>
                            <p></p>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                            <input type="password" class="form-control" name="cpassword" id="cpassword"  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number , one uppercase , lowercase letter , and at least 6 or more characters" placeholder="Re-enter the Password">
                            </div>
                            @error("cpassword")
                            <p style="color:red">{{$errors->first("cpassword")}}
                                @enderror
                                </p>
                            <input type="checkbox" onclick="myFunctions()" >Show Password
                            <p></p>
                            {{--<div class="form-group">--}}
                                {{--<div class="custom-control custom-checkbox">--}}
                                    {{--<input type="checkbox" class="custom-control-input"  name="term" id="customControlInline">--}}
                                    {{--<label class="custom-control-label" for="customControlInline"> I agree to Onecliq Privacy Policy and Terms and Conditions</label>--}}
                                {{--</div>--}}
                                {{--@error("term")--}}
                                {{--<p style="color:red">{{$errors->first("term")}}--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="term" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        I agree to Onecliq <a href="/privacy"> Privacy Policy and Terms and Conditions</a>
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                                <input type="submit" class="btn btn-warning btn-lg btn-block" value="Continue" id="c">
                            <p></p>
                            <p>-----------Already member?-----------</p>
                            <p></p>
                            <a href="/userprofile" style="color: orange">Sign In</a>
                            <p></p>
                        </fieldset>
                    </form>
                <br><br>
            </div>
        </div>
    </div>
</div>
<br/><br/><br/><br/><br/></div></div></div></div></div>
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://www.iroidtechnologies.com/">Iroid Technologies</a>
            <br>
            &copy;Anjali Sethumadhavan
        </p>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#c").click(function(){

            var otp = Math.floor((Math.random() * 10000) + 99999);
            alert(otp);
//            $('#c').val(c);

        });
    });
</script>
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