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
        @foreach($result5 as $value)

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
                                        <form name="updateuser" action="/updateuser" method="post">
                                            @csrf
                                        <tr></tr>
                                        <tr bgcolor="#ffe4e1">

                                            {{--<th></th>--}}
                                        <tr>
                                            <td>Name</td>
                                            <td><input type="text" name="name" value=" {{$value->username}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Contact Number</td>
                                            <td><input type="text" name="mobile" value="{{$value->mobile}}"></td>
                                            {{--<td><a href="/editvendor/{{$value->id}}"> Edit</a></td>--}}

                                        </tr>
                                        <tr>
                                            <td>email</td>
                                            <td><input type="text" name="email" value="{{$value->email}}"></td>
                                        </tr>
                                        <tr>
                                            <td>password</td>
                                            <td><input  type="password" name="password" id="password" value="{{$value->password}}">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"  onclick="myFunction()" id="customControlInline">
                                                    <label class="custom-control-label" for="customControlInline">Show Password</label>
                                                </div>
                                            </div></td>
                                        </tr>

                                        <tr>
                                            <td>address</td>

                                            <td><input  type="text" name="address" value=" {{$value->address }}">

                                            </td>

                                        </tr>
                                            <tr>
                                                <td>
                                                <input type="submit" class="btn btn-success" name="update" value="Update">  </td>
                                            </tr>
                                        </form>
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


            </section>
            <!-- /.content-wrapper -->
        @endforeach
    </div>
@endsection
