<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 31-03-2021
 * Time: 13:38
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
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active"> Business Types</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-sm-6">
                        <table class="table">
                            <thead class="table-warning">
                            <tr>
                                <th>Business Types</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            @foreach($result as $value)

                                <tbody>
                                <td>{{$value->type}}</td>
                                @if($value->status==1)
                                    <td>Active</td>
                                @else
                                    <td>Inactive</td>
                                @endif
                                <td><a href="/deletebtype/{{$value->b_id}}"class="btn btn-danger btn-sm">X</a></td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Add Type</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="/addbusiness">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Business Types</label>
                                        <input type="text" class="form-control" id="txt_bs" name="type" placeholder="Enter Business Type">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- /.row -->
                    <!-- Main row -->

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection('body')