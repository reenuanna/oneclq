<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 19-04-2021
 * Time: 11:15
 */
?>

@extends('vendorheader')
@section('body')

    {{--    <!-- Content Wrapper. Contains page content -->--}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="color: #930974">Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        {{--<ol class="breadcrumb float-sm-right">--}}
                        {{--<li class="breadcrumb-item"><a href="/vendordash">Home</a></li>--}}
                        {{--<li class="breadcrumb-item active">Vendors</li>--}}
                        {{--</ol>--}}
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        @foreach($result as $value)

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">PERSONAL DETAILS</h3>
                                    {{--<h5 align="right"><a href="/editvendor"> Edit</a></h5>--}}
                                </div>
                                <!-- /.card-header -->

                                <form name="updateprof" method="post" action="/updateprof/{{session('sessid')}}" enctype="multipart/form-data">
                               @csrf
                                <div class="card-body">
                                    <table class="table table-bordered" >
                                        <thead>

                                        {{--<tr>--}}
                                        {{--<th></th>--}}
                                        {{--<th></th>--}}
                                        {{--<th>Edit</th>--}}

                                        {{--</tr>--}}
                                        </thead>
                                        <tbody>
                                        {{--<tr><a href="/editvendor/{{$value->id}}"> Edit</a></tr>--}}

                                            {{--<th></th>--}}
                                        <tr bgcolor="#dcdcdc">
                                            {{--<td>2.</td>--}}
                                            <td>email</td>
                                            <td>{{$value->email}}</td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#ffe4e1">

                                        <td>Contact Number</td>
                                            {{--<td><input type="text"name="email"value="   {{$value->mobile}}">--}}

                                            <td>91{{$value->mobile}}
                                            </td>
                                            {{--<td><a href="/editvendor/{{$value->id}}"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#dcdcdc">
                                            {{--<td>2.</td>--}}
                                            <td>Address</td>
                                            {{--<td>{{$value->address}}</td>--}}
                                            <td><input type="text"name="address"value="   {{$value->address}}">

                                                {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#ffe4e1">
                                            {{--<td>3.</td>--}}
                                            <td>Pincode</td>
                                            <td><input type="text"name="pincode"value="   {{$value->pincode}}"></td>

                                            {{--<td>{{$value->pincode}}</td>--}}
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#dcdcdc">
                                            {{--<td>2.</td>--}}
                                            <td>password</td>
                                            {{--<td>{{$value->address}}</td>--}}
                                            <td><input type="password" id="password" name="password" value="{{$value->password}}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number , one uppercase , lowercase letter , and at least 6 or more characters" >

                                                <input type="checkbox" onclick="myFunction()" >Show Password
                                                {{--<td><a href="/editvendor"> Edit</a></td>--}}
</td> @error("password")
                                            <p style="color:red">{{$errors->first("password")}}
                                            @enderror
                                        </tr>
                                        <tr bgcolor="#ffe4e1">
                                            {{--<td>2.</td>--}}
                                            <td>Confirm Password</td>
                                            <td><input type="password" id="cpassword" name="cpassword"  value="{{$value->cpassword}}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number , one uppercase , lowercase letter , and at least 6 or more characters">
                                            <input type="checkbox" onclick="myFunctions()" >Show Password
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}


                                        @error("cpassword")
                                        <p style="color:red">{{$errors->first("cpassword")}}
                                            @enderror
                                        </tr>
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
                                        {{--<tr bgcolor="#f0f8ff">--}}
                                        {{--<td>4.</td>--}}
                                        {{--<td>District</td>--}}
                                        {{--<td>{{$value->district}}</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr bgcolor="#f0f8ff">--}}
                                        {{--<td>5.</td>--}}
                                        {{--<td>Location</td>--}}
                                        {{--<td>{{$value->location}}</td>--}}
                                        {{--</tr >--}}
                                        {{--<tr bgcolor="#f0f8ff">--}}
                                        {{--<td>6.</td>--}}
                                        {{--<td>Business Type</td>--}}
                                        {{--<td>{{$value->type}}</td>--}}
                                        {{--</tr>--}}
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">COMPANY DETAILS</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered" >
                                        <thead>

                                        <tr>
                                            {{--<th style="width: 10px">#</th>--}}
                                            {{--<th>Task</th>--}}
                                            {{--<th>Progress</th>--}}

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr bgcolor="#ffe4c4">
                                            {{--<td>1.</td>--}}
                                            <td>Legal company Name </td>
                                            <td><input type="text"name="Lname"value="   {{$value->Lname}}">

                                            {{--<td>{{$value->Lname}}--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#f0f8ff">
                                            {{--<td>2.</td>--}}
                                            <td>Office Number</td>
                                            <td><input type="text"name="num"value="   {{$value->num}}">

                                            {{--<td>{{$value->num}}--}}
                                            </td>
                                            {{--<td><a href="/editvendor/{{$value->id}}"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#ffe4c4">
                                            {{--<td>3.</td>--}}
                                            <td>State</td>

                                                {{--<input type="text"name="state"value="   {{$value->state}}">--}}

                                            <td>{{$value->state}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#f0f8ff">
                                            {{--<td>4.</td>--}}
                                            <td>District</td>
                                            <td><input type="text"name="district"value="   {{$value->district}}">

                                            {{--<td>{{$value->district}}--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#ffe4c4">
                                            {{--<td>5.</td>--}}
                                            <td>Location</td>
                                            <td><input type="text"name="location"value="   {{$value->location}}">

                                            {{--<td>{{$value->location}}--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr >
                                        <tr bgcolor="#f0f8ff">
                                            {{--<td>6.</td>--}}
                                            <td>Business Type</td>
                                            <td><input type="text"name="type"value="   {{$value->type}}">

                                            {{--<td>{{$value->type}}--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                {{--<div class="card-footer clearfix">--}}
                                {{--<ul class="pagination pagination-sm m-0 float-right">--}}
                                {{--<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                            <!-- /.card -->
                        </div>

                        <!-- /.col -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"> STORE INFORMATION</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>

                                        <tr>
                                            {{--<th style="width: 10px">#</th>--}}
                                            {{--<th>Task</th>--}}
                                            {{--<th>Progress</th>--}}
                                            {{--<th style="width: 40px">Label</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr bgcolor="#f0f8ff">

                                            <td>Store Name</td>
                                            <td><input type="text"name="storename"value="   {{$value->storename}}">

                                            {{--<td>{{$value->storename}}--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        {{--@foreach($result3 as $value3)--}}
                                        {{--<tr bgcolor="#ffe4c4">--}}

                                            {{--<td>Selling categories</td>--}}
                                            {{--<td><input type="text"name="categories"value="   {{$value3->cat_brand}}">--}}

{{--                                            <td>{{$value->categories}}--}}
                                                {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--@endforeach--}}
                                        <tr bgcolor="#f0f8ff">

                                            <td>Store Logo</td>
                                            <td>
                                                {{--<img src="{{asset('uploads/'.$value->logo)}} " width="50" height="50"/>--}}
                                                {{--<br/>--}}
                                                {{--<input type="file" name="file" >--}}
                                                <input type="file"  class="form-control" name="logo" placeholder="Your Store Logo"  alt="Store logo">

                                                <img src="{{asset('uploads/'.$value->logo)}}" width="50" name="logo" height="50"/>

{{--                                                <a href="{{ asset('uploads/'.$value->logo) }}">Logo</a>--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>


                                        </tbody>
                                    </table>
                                    <br/><br/><br/><br/>
                                </div>
                                <!-- /.card-body -->
                                {{--<div class="card-footer clearfix">--}}
                                {{--<ul class="pagination pagination-sm m-0 float-right">--}}
                                {{--<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title" >BUSINESS DETAILS</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>

                                        <tr>
                                            {{--<th style="width: 10px">#</th>--}}
                                            {{--<th>Task</th>--}}
                                            {{--<th>Progress</th>--}}
                                            {{--<th style="width: 40px">Label</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr bgcolor="#dcdcdc">

                                            <td> Trade Licence Number</td>
                                            <td><input type="text"name="tln"value="   {{$value->tln}}">

                                            {{--<td>{{$value->tln}}--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#ffe4e1">

                                            <td>Trade Licence Document</td>
                                            {{--<td><input type="text"name="storename"value="   {{$value->storename}}">--}}

                                            <td>
                                                <input type="file" name="tld" >
                                                <img src="{{asset('uploads/'.$value->tld)}}" width="50" height="50"/>

{{--                                                <a href="{{ asset('uploads/'.$value->tld) }}">Trade Licence Document</a>--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>PAN Number</td>
                                            <td><input type="text"name="pann"value="   {{$value->pann}}">

{{--                                            <td>{{$value->pann}}--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#ffe4e1">

                                            <td>PAN Card</td>
                                            {{--<td><input type="text"name="storename"value="   {{$value->storename}}">--}}

                                            <td>
                                                <input type="file" name="panc" >
                                                <img src="{{asset('uploads/'.$value->panc)}}" name="panc"  width="50" height="50"/>

{{--                                                <a href="{{ asset('uploads/'.$value->panc) }}">PAN Card</a>--}}

                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>ID Proof</td>
                                            {{--<td><input type="text"name="storename"value="   {{$value->storename}}">--}}

                                            <td>            <input type="file" name="idp" >
                                                <img src="{{asset('uploads/'.$value->idp)}}" name="idp"  width="50" height="50"/>
</td>
{{--                                                <a href="{{ asset('uploads/'.$value->idp) }}">ID Proof</a></td>--}}
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#ffe4e1">

                                            <td>FSSAI Lic.No.(Mandatory for food related vendor)</td>
                                            <td><input type="text"name="fssai"value="   {{$value->fssai}}">

                                            {{--<td>{{$value->fssai}}--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>Shipping Mode</td>
                                            <td><input type="text"name="ship"value="   {{$value->ship}}">

                                            {{--<td>{{$value->ship}}--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                {{--<div class="card-footer clearfix">--}}
                                {{--<ul class="pagination pagination-sm m-0 float-right">--}}
                                {{--<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                            <!-- /.card -->
                        </div>

                        <!-- /.col -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">BANK DETAILS</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>

                                        <tr>
                                            {{--<th style="width: 10px">#</th>--}}
                                            {{--<th>Task</th>--}}
                                            {{--<th>Progress</th>--}}
                                            {{--<th style="width: 40px">Label</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr bgcolor="#ffe4e1">

                                            <td>Name in Bank Details</td>
                                            <td><input type="text"name="bankname"value="   {{$value->bankname}}">

                                            {{--<td>{{$value->bankname}}--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>Bank Account type</td>
                                            {{--<td>{{$value->acctype}}--}}
                                            <td><input type="text"name="acctype"value="   {{$value->acctype}}">

                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#ffe4e1">

                                            <td>Bank Account Number</td>
                                            {{--<td>--}}
{{--                                                {{$value->accnum}}--}}
                                            <td><input type="text"name="accnum"value="   {{$value->accnum}}">

                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>Bank IFSC Code</td>
{{--                                            <td>{{$value->ifsc}}--}}
                                            <td><input type="text"name="ifsc"value="   {{$value->ifsc}}">

                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#ffe4e1">

                                            <td>Cancelled Cheque</td>
                                            <td>             <input type="file" name="cc" >
                                                <img src="{{asset('uploads/'.$value->cc)}}" name="cc" width="50" height="50"/>

                                                {{--<a href="{{ asset('uploads/'.$value->cc) }}">Cancelled Cheque</a>--}}
                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>Signature</td>
                                            <td>              <input type="file" name="sign" >
{{--                                                <a href="{{ asset('uploads/'.$value->sign) }}">Signature</a>--}}
                                                <img src="{{asset('uploads/'.$value->sign)}}" name="sign" width="50" height="50"/>

                                            </td>
                                            {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                        </tr>

                                        </tbody>
                                    </table>
                                    <br/><br/>
                                </div>
                                <!-- /.card-body -->
                                {{--<div class="card-footer clearfix">--}}
                                {{--<ul class="pagination pagination-sm m-0 float-right">--}}
                                {{--<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                            <input type="submit" name="updateprof" value="Update" class="btn btn-info">
                            </form>

                            <!-- /.card -->
                        </div>
                    </div>

                    <!-- /.row -->
                </div>
                <!-- /.content -->



            </section>
            <!-- /.content-wrapper -->
        @endforeach
    </div>
@endsection
