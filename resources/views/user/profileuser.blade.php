<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 04-05-2021
 * Time: 20:04
 */
        ?>


@extends('user.home')
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
                                    <h3 class="card-title">PERSONAL DETAILS
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        --
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        {{$value->username}}</h3>
                                    {{--<h5 align="right"><a href="/editvendor"/{{session('sessid')}}> Edit--}}
                                        {{--</a></h5>--}}
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
                                        <tr><a href="/edituser"> Edit</a></tr>
                                        <tr></tr>
                                        <tr bgcolor="#ffe4e1">

                                            {{--<th></th>--}}
                                        <tr>
                                            <td>Name</td>
                                            <td>{{$value->username}}</td>
                                        </tr>
                                        <tr>
                                            <td>Contact Number</td>
                                            <td>{{$value->mobile}}</td>
                                            {{--<td><a href="/editvendor/{{$value->id}}"> Edit</a></td>--}}

                                        </tr>
                                        <tr>
                                            <td>email</td>
                                            <td>{{$value->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>password</td>
                                            <td><input class="form-control-plaintext" type="password" readonly value="{{$value->password}}"></td>
                                        </tr>
                                        <tr>
                                            <td>address</td>

                                            <td>{{$value->address }}

                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>                            </div>

                            <a href="/deleteuser/{{$value->uid}}" class="btn btn-success">Delete Account</a>
                                <h5 style="color: deeppink">Account will be deleted after 14 days.Log in any time before 14 days over</h5>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->




            </section>
            <!-- /.content-wrapper -->
        @endforeach
    </div>
@endsection
