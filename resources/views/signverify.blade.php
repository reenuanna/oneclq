<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 24-03-2021
 * Time: 14:09
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
<body>

<div class="row" style="background-color: whitesmoke"align="center">
    <div class="col-sm-5 content">
        <img src="dist/img/logo.png">
        <div style="font-size: medium;font-family:'Roboto', sans-serif" align="left">

                 <p><b>OneCliq</b><br>India's First Regional Online Shopping</p>
                <p align="justify">
            <div style="font-size: medium;font-family: 'Courier New', Courier, monospace" align="left">

        <p>
            <b>Why OneCliq ? </b><br>
            E-Commerce today is a way of life and an extremely integral part
            of modern day shopping. OneCliq presents in front of you, a unique
            online shopping experience with its huge variety of products from numerous
            categories, making it a one stop shop for all daily needs. We are proud to
            announce that OneCliq today is the only e-commerce platform which features
            a huge variety of indigenous products from the God’s Own Country Kerala, and
            we are featuring sellers exclusively from Kerala and there by truly standing
            by our tagline of the only Regional Shopping Portal in India. Join OneCliq
            today and be a part of the beginning of a brand new era in the e-commerce industry.
        </p>
            </div>
        </div>
    </div>

    <div class="col-sm-7">
      <div class="bg-img">
             <div class="login">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">

                    </div>
                </div>
{{--                @foreach($res as $value)--}}
                <form id="regiration_form"  action="/update/{{session('sessid')}}"  method="post" class="reg" enctype="multipart/form-data">
                    @csrf
                    {{--{{session('sessid')}}--}}
                    {{--@endforeach--}}

                    <fieldset>
                        <h2>Step 1: COMPANY DETAILS</h2>
                        {{--<div class="form-group">--}}
                            {{--<label for="id">id : </label>--}}
                            {{--<input type="text" class="form-control" id="id" name="id" value="{{$value->id}}">--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label for="name">Legal company Name : </label>
                            <input type="text" class="form-control" id="Lname" name="Lname" placeholder="Legal company Name">
                            @error("Lname")
                            <p style="color:red">{{$errors->first("Lname")}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleOffice">Office Number : </label>
                            <input type="text" class="form-control" id="num" placeholder="Office Number" name="num">
                            @error("num")
                            <p style="color:red">{{$errors->first("num")}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleState">State</label>
                            <input type="text" class="form-control" id="state" placeholder="State" name="state" value="Kerala">
                            @error("state")
                            <p style="color:red">{{$errors->first("state")}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleDistrict">District</label>
                            {{--<input type="text" class="form-control" id="district" placeholder="District" name="district">--}}
                            <select class="form-control" id="district" placeholder="District" name="district">
                                <option value="Select district" selected>Select district</option>
                            <option value="Thiruvananthapuram" {{old('district')== 'Thiruvananthapuram'? 'selected' : ''}}>Thiruvananthapuram</option>
                            <option value="Kollam" {{old('district')== 'Kollam'? 'selected' : ''}}>Kollam</option>
                            <option value="Alappuzha" {{old('district')== 'Alappuzha'? 'selected' : ''}}>Alappuzha</option>
                            <option value="Pathanamthitta" {{old('district')== 'Pathanamthitta'? 'selected' : ''}}>Pathanamthitta</option>
                            <option value="Kottayam" {{old('district')== 'Kottayam'? 'selected' : ''}}>Kottayam</option>
                            <option value="Idukki" {{old('district')== 'Idukki'? 'selected' : ''}}>Idukki</option>
                            <option value="Ernakulam" {{old('district')== 'Ernakulam'? 'selected' : ''}}>Ernakulam</option>
                            <option value="Thrissur" {{old('district')== 'Thrissur'? 'selected' : ''}}>Thrissur</option>
                            <option value="Palakkad" {{old('district')== 'Palakkad'? 'selected' : ''}}>Palakkad</option>
                            <option value="Malappuram" {{old('district')== 'Malappuram'? 'selected' : ''}}>Malappuram</option>
                            <option value="Kozhikode" {{old('district')== 'Kozhikode'? 'selected' : ''}}>Kozhikode</option>
                            <option value=" Wayanad" {{old('district')== 'Wayanad'? 'selected' : ''}}> Wayanad</option>
                            <option value="Kannur" {{old('district')== 'Kannur'? 'selected' : ''}}> Kannur </option>
                            <option value="Kasaragod" {{old('district')== 'Kasaragod'? 'selected' : ''}}>Kasaragod</option>
                            </select>
                            @error("district")
                            <p style="color:red">{{$errors->first("district")}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleLocation">Location</label>
                            <input type="text" class="form-control" id="location" placeholder="Your location name" name="location">
                            @error("location")
                            <p style="color:red">{{$errors->first("location")}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleBusiness Type">Business Type</label>
                            {{--<input type="text" class="form-control" id="type" placeholder="Business Type" name="type">--}}
                            <select class="form-control" id="type"  name="type">
                                <option value="Select Business Type" selected>Select Business Type</option>
                                @foreach($result2 as $value2)

                                    <option value="type">{{$value2->type}} </option>
                                @endforeach

                                {{--<option value="Partnership" {{old('type')== 'Partnership'? 'selected' : ''}}>Partnership</option>--}}
                                {{--<option value="Limited liability Partnership" {{old('type')== 'ted liability Partnership'? 'selected' : ''}}>Limited liability Partnership</option>--}}
                                {{--<option value="Limited Company" {{old('district')== 'type'? 'Limited Company' : ''}}>Limited Company</option>--}}
                                {{--<option value="Private Limited" {{old('district')== 'type'? 'Private Limited' : ''}}>Private Limited</option>--}}
                                {{--<option value="Others">Others</option>--}}
                                </select>
                            @error("type")
                            <p style="color:red">{{$errors->first("type")}}
                            @enderror
                        </div>

                        <input type="button" name="password" class="next btn btn-info" value="Next" id="step1" />
                    </fieldset>
                    <fieldset>
                        <h2>Step 2: STORE INFORMATION</h2>
                        <div class="form-group">
                            <label for="Your Store Name">Your Store Name</label>
                            <input type="text" class="form-control" id="store name" placeholder="My Store" name="storename">
                            @error("storename")
                            <p style="color:red">{{$errors->first("storename")}}
                            @enderror
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="Your Selling categories">Category of store / Basic category</label>--}}
                            {{--<select class="form-control" name="categories" placeholder="Your Selling categories" name="categories">--}}
                                {{--<option value="Select categories">Select categories </option>--}}
                                {{--@foreach($result1 as $value1)--}}

                                    {{--<option value="{{$value1->cat_brand}}">{{$value1->cat_brand}} </option>--}}
                                {{--@endforeach--}}

                            {{--</select>--}}
                            {{--@error("categories")--}}
                            {{--<p style="color:red">{{$errors->first("categories")}}--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label for="Logo">Your Store Logo</label>
                            <input type="file"  class="form-control" name="logo" placeholder="Your Store Logo" name="logo">
                            @error("logo")
                            <p style="color:red">{{$errors->first("logo")}}
                            @enderror
                        </div>
                        <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                        <input type="button" name="next" class="next btn btn-info" value="Next" />
                    </fieldset>

                    <fieldset>
                        <h2> Step 3: BUSINESS DETAILS</h2>
                        <div class="form-group">
                            <label for="tln">Trade Licence Number : </label>
                            <input type="text" class="form-control" name="tln" id="tln" placeholder="Trade Licence Number :">
                            @error("tln")
                            <p style="color:red">{{$errors->first("tln")}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tld">Trade Licence Document</label>
                            <input type="file" class="form-control" name="tld" id="tld" placeholder="Trade Licence Document">
                            @error("tld")
                            <p style="color:red">{{$errors->first("tld")}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="PAN Number">PAN Number</label>
                            <input type="text" class="form-control" name="pann" id="pann" placeholder="PAN Number">
                            @error("pann")
                            <p style="color:red">{{$errors->first("pann")}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="PAN Card">PAN Card</label>
                            <input type="file" class="form-control" name="panc" id="panc" placeholder="PAN Card">
                            @error("panc")
                            <p style="color:red">{{$errors->first("panc")}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ID Proof">ID Proof</label>
                            <input type="file" class="form-control" name="idp" id="idp" placeholder="ID Proof">
                            @error("idp")
                            <p style="color:red">{{$errors->first("idp")}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="FSSAI">FSSAI Lic.No.(Mandatory for food related vendor</label>
                            <input type="text" class="form-control" name="fssai" id="fssai" placeholder="For food related vendor">
                            {{--@error("fssai")--}}
                            {{--<p style="color:red">{{$errors->first("fssai")}}--}}
                            {{--@enderror--}}
                        </div>
                        <div class="form-group">
                            <label for="Shipping Mode">Shipping Mode</label>
                            <select class="form-control" name="ship" id="ship" placeholder="Shipping Mode">
                                <option value="Shipping mode" selected> Shipping mode</option>
                                <option value="free" {{old('ship')== 'free'? 'selected' : ''}}>free</option>
                                <option value="paid" {{old('ship')== 'paid'? 'selected' : ''}}>Paid</option>
                                <option value="both" {{old('ship')== 'both'? 'selected' : ''}}>Both</option>
                            </select>
                                @error("ship")
                                <p style="color:red">{{$errors->first("ship")}}
                                    @enderror

                            {{--<input type="text" class="form-control" name="ship" id="ship" placeholder="Shipping Mode">--}}
                        </div>
                        <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                        <input type="button" name="next" class="next btn btn-info" value="Next" />
                        </fieldset>

                        <fieldset>
                            <h2>Step 4: BANK DETAILS</h2>
                            <div class="form-group">
                                <label for="Bank Details">Your Name in Bank Details :</label>
                                <input type="text" class="form-control" id="bankname" placeholder="Enter Name as in Bank" name="bankname">
                                @error("bankname")
                                <p style="color:red">{{$errors->first("bankname")}}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="acctype">Your Bank Account type : </label>
                                <select class="form-control" name="acctype" placeholder="Your Bank Account type" name="acctype">
                                    <option value="Bank Account type" selected>Bank Account type</option>
                                    <option value="Savings" {{old('acctype')== 'Savings'? 'selected' : ''}}>Savings</option>
                                    <option value="Current" {{old('acctype')== 'Current'? 'selected' : ''}}>Current</option>
                                    <option value="Salary" {{old('acctype')== 'Salary'? 'selected' : ''}}>Salary</option>
                                </select>
                                {{--<input type="text"  class="form-control" name="acctype" placeholder="Your Bank Account type" name="acctype">--}}

                                @error("acctype")
                                <p style="color:red">{{$errors->first("acctype")}}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Account Number">Your Bank Account Number ? </label>
                                <input type="text" class="form-control" id="accnum" placeholder="Account Number" name="accnum">
                                @error("accnum")
                                <p style="color:red">{{$errors->first("accnum")}}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="IFSC">Your Bank IFSC Code : </label>
                                <input type="text"  class="form-control" name="ifsc" placeholder="Bank IFSC Code" name="ifsc">
                                @error("ifsc")
                                <p style="color:red">{{$errors->first("ifsc")}}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Cancelled Cheque">Cancelled Cheque : </label>
                                <input type="file" class="form-control" name="cc" id="cc" placeholder="Cancelled Cheque">
                                @error("cc")
                                <p style="color:red">{{$errors->first("cc")}}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Signature">Signature : </label>
                                <input type="file" class="form-control" name="sign" id="sign" placeholder="Signature">
                                @error("sign")
                                <p style="color:red">{{$errors->first("sign")}}
                                @enderror
                            </div>
                        <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                        <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
                    </fieldset>

                </form>
            </div>
        </div>
    </div>

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
