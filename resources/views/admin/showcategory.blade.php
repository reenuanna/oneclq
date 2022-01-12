<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 31-03-2021
 * Time: 11:29
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
                        <h1 class="m-0 text-dark">Categories</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Categories</li>
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
                                <th>Selling Category</th>

                            </tr>
                            </thead>
                            @foreach($result as $value)

                                <tbody>
                                <td>{{$value->cat_brand}}</td>
                                <td><a href="/subcat/{{$value->cat_id}}" > <b> +  </b></a></td>
                                <td> <a href="/delete/{{$value->cat_id}}"class="btn btn-danger btn-sm">X</a></td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Add Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="/category">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        <input type="text" class="form-control" id="txt_bs" name="category" placeholder="Enter Category">
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