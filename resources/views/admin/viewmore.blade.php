<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 25-03-2021
 * Time: 16:07
 */
        ?>
@extends('admin.adminheader')
@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->

        <section class="content">
            <div class="container-fluid">
        <table align="center" class="table">
            <div class="row">
                <div class="col-sm-12">
            <p><tr><td colspan="7" align="center"><b>MORE DETAILS OF REGISTERED VENDORS</b></td></tr></p>
            <tr>
                <th>Legal company Name</th>
                <th>Office Number</th>
                <th>State</th>
                <th>District</th>
                <th>Location</th>
                <th>Business Type</th>
                <th>Store Name</th>
                <th>Selling categories</th>
                <th>Store Logo</th>
                <th>Trade Licence Number</th>
                <th>Trade Licence Document</th>
                <th>PAN Number</th>
                <th>PAN Card</th>
                <th>ID Proof</th>
                <th>FSSAI Lic.No.(Mandatory for food related vendor</th>
                <th>Shipping Mode</th>
                <th>Name in Bank Details</th>
                <th> Bank Account type</th>
                <th>Bank IFSC Code</th>
                <th>Cancelled Cheque</th>
                <th>Signature</th>



                {{--<th>Admin status</th>--}}
            </tr>
            @foreach($result as $value)

                <tr>
                    <td>{{$value->Lname}}</td>
                    <td>{{$value->num}}</td>
                    <td>{{$value->state}}</td>
                    <td>{{$value->district}}</td>
                    <td>{{$value->location}}</td>
                    <td>{{$value->type}}</td>
                    <td>{{$value->storename}}</td>
                    <td>{{$value->categories}}</td>
                    <td><img src="{{asset('uploads/'.$value->logo)}} " width="50" height="50"/>
                        <a href="{{ asset('uploads/'.$value->logo) }}">a</a>
                    </td>
                    <td>{{$value->tln}}</td>
                    <td><img src="{{asset('uploads/'.$value->tld)}} " width="50" height="50"/></td>
                    <td>{{$value->pann}}</td>
                    <td><img src="{{asset('uploads/'.$value->panc)}} " width="50" height="50">
                        <a href="{{ asset('uploads/'.$value->panc) }}">b</a>
                    </td>
                    <td><img src="{{asset('uploads/'.$value->idp)}} " width="50" height="50"/></td>
                    <td>{{$value->fssai}}</td>
                    <td>{{$value->ship}}</td>
                    <td>{{$value->bankname}}</td>
                    <td>{{$value->acctype}}</td>
                    <td>{{$value->accnum}}</td>

                    <td>{{$value->ifsc}}</td>
                    <td><img src="{{asset('uploads/'.$value->cc)}} " width="50" height="50"/></td>
                    <td>
                        {{--<img src="{{asset('uploads/'.$value->sign)}} " width="50" height="50"/>--}}
                        <a href="{{ asset('uploads/'.$value->sign) }}">c</a>
                    </td>


                </tr>


            @endforeach
        </table>

        <!-- /.content -->

        {{--<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">--}}
            {{--<i class="fas fa-chevron-up"></i>--}}
        {{--</a>--}}
    </div>

    <!-- /.content-wrapper -->
@endsection


