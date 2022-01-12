<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 21-05-2021
 * Time: 20:00
 */
        ?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OneCliq|Vendor</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <link rel="stylesheet" href="dist/css/style.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="row" style="background-color: whitesmoke"align="center">
        <div class="col-sm-5 content">
                <img src="dist/img/logo.png">
                <p>
                <div style="font-size: medium;font-family:'Roboto', sans-serif" align="left">

                        <b>OneCliq</b><br>India's First Regional Online Shopping</p>
        </div>
        <div style="font-size: medium;font-family: 'Courier New', Courier, monospace" align="left">

                <p align="justify">
                        Why OneCliq?<br>
                        E-Commerce today is a way of life and an extremely integral part
                        of modern day shopping. OneCliq presents in front of you, a unique
                        online shopping experience with its huge variety of products from numerous
                        categories, making it a one stop shop for all daily needs. We are proud to
                        announce that OneCliq today is the only e-commerce platform which features
                        a huge variety of indigenous products from the God’s Own Country Kerala, and
                        we are featuring sellers exclusively from Kerala and there by truly standing
                        by our tagline of the only Regional Shopping Portal in India. Join OneCliq
                        today and be a part of the beginning of a brand new era in the e-commerce industry.
        </div>
        </p>
</div>
<div class="col-sm-7">
        <div class="bg-img" >

                <div class="text" >
                        <p>
                                <b > Password Reset</b></p>
                        <p>
                                Please enter new password
                        </p>
                </div>
                <div class="login">
                        <form method="post" action="/updatevendorpass">
                                @csrf
                                <input type="email" class="form-control" placeholder="Enter your Email Id" name="email">
                                @error("email")
                                <p style="color:red">{{$errors->first("email")}}
                                        @enderror
                                        <input type="password" class="form-control" name="txt_pass" id="txt_pass"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number , one uppercase , lowercase letter , and at least 6 or more characters" placeholder="Enter Password">
                                        <input type="checkbox" onclick="myFunction()" >Show Password
                                        @error("txt_pass")
                                <p style="color:red">{{$errors->first("txt_pass")}}
                                        @enderror
                                        <input type="password" class="form-control" name="txt_cpass" id="txt_cpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number , one uppercase , lowercase letter , and at least 6 or more characters" placeholder="Re-enter the Password">
                                        <input type="checkbox" onclick="myFunctions()" >Show Password
                                        @error("txt_cpass")
                                <p style="color:red">{{$errors->first("txt_cpass")}}
                                        @enderror
                                        <input type="submit" class="btn btn-warning btn-lg btn-block" value="Submit" id="sub">
                                <p align="center"> <a href="/vendor">Back to Sign In</a></p>
                        </form>
                </div>
        </div>
</div>
</div>
<script>
        $(document).ready(function(){
                $("#otp").click(function(){

                        var otp = Math.floor((Math.random() * 10000) + 99999);
                        alert(otp);
                        $('#otp_num').val(otp);

                });
        });

</script>

<script>
        function myFunction() {
                var x = document.getElementById("txt_pass");
                if (x.type === "password") {
                        x.type = "text";
                } else {
                        x.type = "password";
                }
        }
        function myFunctions() {
                var x = document.getElementById("txt_cpass");
                if (x.type === "password") {
                        x.type = "text";
                } else {
                        x.type = "password";
                }
        }
</script>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
        $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>