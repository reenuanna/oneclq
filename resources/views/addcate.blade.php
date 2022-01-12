<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 09-04-2021
 * Time: 10:43
 */
        ?>

@extends('vendorheader')
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
                            <li class="breadcrumb-item"><a href="/vendordash">Home</a></li>
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
                                <th> Category</th>

                            </tr>
                            </thead>
                            @foreach($result1 as $value1)

                                <tbody>
                                {{--<td>{{$value->cat_brand}}</td>--}}
                                {{--<td><a href="/subcat/{{$value->cat_id}}" > + </a></td>--}}
                                {{--</tr>--}}
                                {{--                                @foreach($result1 as $value1)--}}
                                <tr>
                                    {{--<td>Item Name</td>--}}
                                    <td>{{$value1->name}}</td>
                                    {{--@endforeach--}}
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
                            {{----}}
                            <!-- form start -->
                            @foreach($result as $value)
                                <form method="post" action="/subcategory/{{$value->cat_id}}">
                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category</label>
                                            <input type="text" class="form-control" id="txt_bs" name="category" value="{{$value->cat_brand}}" placeholder="Enter Category">
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Item Name</label>
                                            <input type="text" class="form-control" id="txt_bs" name="sub" placeholder="Enter Category item">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-warning">Submit</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <h5 style="color: #e90f92"><a href="/back"> Back</a></h5>
                    <!-- /.row -->
                    <!-- Main row -->

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection('body')