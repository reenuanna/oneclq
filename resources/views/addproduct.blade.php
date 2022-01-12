<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 24-03-2021
 * Time: 14:09
 */
?>

@extends('vendorheader')

@section('body');
{{--<!DOCTYPE html>--}}
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OneCliq|Vendor</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        #regiration_form fieldset:not(:first-of-type) {
            display: none;
        }
        .login{
            max-width: 500px;
            margin: auto;
            padding: 20px;
            margin-top: 10px;
        }
    </style>
</head>
<body >

<div class="row" style="background-color: whitesmoke"align="center">
    <div class="col-sm-5 content">
        {{--<img src="/images/login-cover.j/pg" height="50">--}}
        <div style="font-size: medium;font-family:'Roboto', sans-serif" align="left">

            {{--<p><b>OneClick</b><br>India's First Regional Online Shopping</p>--}}
            {{--<p align="justify">--}}

        </div></div>

    <div class="col-sm-7">
        <div class="bg-img">
            <div class="login">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                @foreach($result as $value)
                    <form id="regiration_form" novalidate action="/saveproduct/{{session('sessid')}}"  method="post" class="product" enctype="multipart/form-data">
                        @csrf
                        @endforeach

                        <fieldset>
                            <h2>Step 1: PRODUCT DETAILS</h2>
                            {{--<div class="form-group">--}}
                            {{--<label for="id">id : </label>--}}
                            {{--<input type="text" class="form-control" id="id" name="id" value="{{$value->id}}">--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label for="name">Product Name : </label>
                                <input type="text" class="form-control" id="prod_name" name="prod_name" placeholder="product name">
                            </div>
                            <div class="form-group">
                                <label for="examplebc">Brand & Category : </label>
                                <select class="form-control" name="brand" placeholder="Your Selling categories">
                                    <option value="Select categories">Select categories </option>
                                    @foreach($brand as $value1)

                                    <option value="{{$value1->category}}">  {{$value1->category}}</option>

                                    @endforeach
                                    {{--<option value="Woman's Fashion">Woman's Fashion</option>--}}
                                    {{--<option value="Baby & Kids">Baby & Kids</option>--}}
                                    {{--<option value="Home & Kitchen">Home & Kitchen</option>--}}
                                    {{--<option value="Beauty , Health & Diet">Beauty , Health & Diet</option>--}}
                                    {{--<option value="Pathayapura">Pathayapura</option>--}}
                                    {{--<option value="Mobiles and Accessories">Mobiles and Accessories</option>--}}
                                    {{--<option value="Laptops , Computers & Accessories">Laptops , Computers & Accessories</option>--}}
                                    {{--<option value="Electroincs and Applications">Electroincs and Applications</option>--}}
                                    {{--<option value="Sports & Fitness">Sports & Fitness</option>--}}
                                    {{--<option value="Automobile">Automobile</option>--}}
                                    {{--<option value="Industrial & Scientific Supplies">Industrial & Scientific Supplies</option>--}}
                                    {{--<option value="Food & Beverages">Food & Beverages</option>--}}
                                    {{--<option value="Books">Books</option>--}}
                                    {{--<option value="Movies , Music & Video Games">Movies , Music & Video Games</option>--}}
                                    {{--<option value="School Supplies & Stationary" >School Supplies & Stationary</option>--}}
                                    {{--<option value="Furniture & Furnishing">Furniture & Furnishing</option>--}}
                                </select>
                                {{--<input type="text" class="form-control" id="brand" placeholder="Brand & Category" name="brand">--}}
                            </div><div class="form-group">
                                <label for="exampleCategory">Category</label>
                                <input type="text" class="form-control" id="cat" placeholder="Category" name="cat" >
                            </div>


                            <input type="button" name="password" class="next btn btn-info" value="Next" id="step1" />
                        </fieldset>

                        <fieldset>
                            <h2>Step 2: Unit and Measurement</h2>
                            <div class="form-group">
                                <label for="Yourweight">Weight</label>
                                <input type="text" class="form-control" id="weight" placeholder="weight" name="weight">
                            </div>

                            <div class="form-group">
                                <label for="Height">Height</label>
                                <input type="text"  class="form-control" name="height" placeholder="height" name="height">
                            </div>
                            <div class="form-group">
                                <label for="Length">Length</label>
                                <input type="text"  class="form-control" name="length" placeholder="length" name="length">
                            </div>
                            <div class="form-group">
                                <label for="Width">Width</label>
                                <input type="text"  class="form-control" name="width" placeholder="width" name="width">
                            </div>
                            <div class="form-group">
                                <label for="Stock">Stock</label>
                                <input type="text"  class="form-control" name="stock" placeholder="stock" name="stock">
                            </div>
                            <div class="form-group">
                                <label for="Image">Image</label>
                                <input type="file"  class="form-control" name="image" placeholder="image" name="image">
                            </div>
                            <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                            <input type="button" name="next" class="next btn btn-info" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h2> Step 3: PRICE DETAILS</h2>
                            <div class="form-group">
                                <label for="MRP">MRP </label>
                                <input type="text" class="form-control" name="MRP" id="MRP" placeholder="MRP :">
                            </div>
                            <div class="form-group">
                                <label for="Price">Selling Price</label>
                                <input type="text" class="form-control" name="Sell_price" id="Sell_price" placeholder="Selling Price">
                            </div>
                            <div class="form-group">
                                <label for="GST">GST</label>
                                <input type="text" class="form-control" name="GST" id="GST" placeholder="GST">
                            </div>
                            <div class="form-group">
                                <label for="refundable">Non refundable</label>
                                <input type="checkbox" class="form-control" name="non_refund" id="non_refund" >
                            </div>
                            <div class="form-group">
                                <label for="Free">Free Delivery</label>
                                <input type="checkbox" class="form-control" name="free_delivery" id="free_delivery" placeholder="ID Proof">
                            </div>


                            <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                            <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
                        </fieldset>

                    </form>
            </div>
        </div>
    </div>



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



<script>
    $(document).ready(function(){
        var current = 1,current_step,next_step,steps;
        steps = $("fieldset").length;
        $(".next").click(function(){
            current_step = $(this).parent();
            next_step = $(this).parent().next();
            next_step.show();
            current_step.hide();
            setProgressBar(++current);

        });
        $(".previous").click(function(){
            current_step = $(this).parent();
            next_step = $(this).parent().prev();
            next_step.show();
            current_step.hide();
            setProgressBar(--current);
        });

        setProgressBar(current);
        // Change progress bar action
        function setProgressBar(curStep){
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                    .css("width",percent+"%")
                    .html(percent+"%");
        }
    });
</script>

</body>
</html>
</section>
@endsection