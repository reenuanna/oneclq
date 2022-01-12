<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 06-04-2021
 * Time: 11:15
 */
?>

@extends('vendorheader')
@section('body')
    @foreach($result as $value)


        {{--Approved--}}

        @if($value->adminstatus==0)
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark"></h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="/vendordash">Home</a></li>
                                    <li class="breadcrumb-item active">Vendor / Pending </li>
                                    <li class="breadcrumb-item active">

                                        {{$value->name}}

                                    </li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <h1 style="color: limegreen">Registration process is pending</h1>
                            {{--<h6>Profile can edit only after</h6>--}}
                        </div>
                    </div>
                </section>
            </div>
            @else
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
                                <h3 class="card-title">PERSONAL DETAILS
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    --
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{$value->name}}</h3>
                                <h5 align="right"><a href="/editvendor"/{{session('sessid')}} > Edit</a></h5>
                            </div>
                            <!-- /.card-header -->
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
                                    <tr bgcolor="#dcdcdc">
                                        {{--<td>2.</td>--}}
                                        <td>email</td>
                                        <td>{{$value->email}}</td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#ffe4e1">

                                        {{--<th></th>--}}

                                        <td>Contact Number</td>
                                        <td>91{{$value->mobile}}</td>
                                        {{--<td><a href="/editvendor/{{$value->id}}"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#dcdcdc">
                                        {{--<td>2.</td>--}}
                                        <td>Address</td>
                                        <td>{{$value->address}}</td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#ffe4e1">
                                        {{--<td>3.</td>--}}
                                        <td>Pincode</td>
                                        <td>{{$value->pincode}}</td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#dcdcdc">
                                        {{--<td>2.</td>--}}
                                        <td>Password</td>
                                        <td><input class="form-control-plaintext" type="password" readonly value="{{$value->password}}"></td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
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
                                        <td>Legal company Name</td>
                                        <td>{{$value->Lname}}</td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#f0f8ff">
                                        {{--<td>2.</td>--}}
                                        <td>Office Number</td>
                                        <td>{{$value->num}}</td>
                                        {{--<td><a href="/editvendor/{{$value->id}}"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#ffe4c4">
                                        {{--<td>3.</td>--}}
                                        <td>State</td>
                                        <td>{{$value->state}}</td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#f0f8ff">
                                        {{--<td>4.</td>--}}
                                        <td>District</td>
                                        <td>{{$value->district}}</td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#ffe4c4">
                                        {{--<td>5.</td>--}}
                                        <td>Location</td>
                                        <td>{{$value->location}}</td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr >
                                    <tr bgcolor="#f0f8ff">
                                        {{--<td>6.</td>--}}
                                        <td>Business Type</td>
                                        <td>{{$value->type}}</td>
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
                                    <tr bgcolor="#f0f8ff" >

                                        <td>Store Name</td>
                                        <td colspan="8"> {{$value->storename}}</td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>

                                    </tr>
                                    <tr bgcolor="#ffe4c4">

                                        <td>Store Logo</td>
                                        <td colspan="8">
                                            {{--<img src="{{asset('uploads/'.$value->logo)}} " width="50" height="50"/>--}}
                                            {{--<br/>--}}
                                            <a href="{{ asset('uploads/'.$value->logo) }}">Logo</a>
                                        </td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#f0f8ff  ">
                                        <td>Selling categories</td>
                                        @foreach($result3 as $value3)

                                            <td>
                                                {{$value3->cat_brand}}<br>
                                                {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                            </td>
                                    @endforeach

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
                                        <td>{{$value->tln}}</td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#ffe4e1">

                                        <td>Trade Licence Document</td>
                                        <td><a href="{{ asset('uploads/'.$value->tld) }}">Trade Licence Document</a>
                                        </td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#dcdcdc">

                                        <td>PAN Number</td>
                                        <td>{{$value->pann}}
                                        </td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#ffe4e1">

                                        <td>PAN Card</td>
                                        <td><a href="{{ asset('uploads/'.$value->panc) }}">PAN Card</a>

                                        </td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#dcdcdc">

                                        <td>ID Proof</td>
                                        <td><a href="{{ asset('uploads/'.$value->idp) }}">ID Proof</a></td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#ffe4e1">

                                        <td>FSSAI Lic.No.(Mandatory for food related vendor)</td>
                                        <td>{{$value->fssai}}</td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#dcdcdc">

                                        <td>Shipping Mode</td>
                                        <td>{{$value->ship}}</td>
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
                                        <td>{{$value->bankname}}</td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#dcdcdc">

                                        <td>Bank Account type</td>
                                        <td>{{$value->acctype}}
                                        </td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#ffe4e1">

                                        <td>Bank Account Number</td>
                                        <td>
                                            {{$value->accnum}}
                                        </td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#dcdcdc">

                                        <td>Bank IFSC Code</td>
                                        <td>{{$value->ifsc}}
                                        </td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#ffe4e1">

                                        <td>Cancelled Cheque</td>
                                        <td>   <a href="{{ asset('uploads/'.$value->cc) }}">Cancelled Cheque</a>
                                        </td>
                                        {{--<td><a href="/editvendor"> Edit</a></td>--}}

                                    </tr>
                                    <tr bgcolor="#dcdcdc">

                                        <td>Signature</td>
                                        <td>   <a href="{{ asset('uploads/'.$value->sign) }}">Signature</a>
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
                        <!-- /.card -->
                    </div>
                </div>
{{--<a href="/deletevendor/{{$value->id}}" class="btn btn-success">Delete Account</a>--}}
                <input type="button" class="btn btn-success" value=" Delete Account" id="confirm">
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                <Script>
                    $('#confirm').click(function(){
                        swal("Contact admin 9207477128", "Vendor can't delete account  self","warning");

                    });

                </Script>
                <h5 style="color: deeppink">Once account deleted then need to re register; contact admin 9207477128 </h5>
                <!-- /.row -->
            </div>
        <!-- /.content -->



</section>
    <!-- /.content-wrapper -->
@endforeach
</div>



        @endif
    @endforeach
@endsection

