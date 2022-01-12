<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 02-05-2021
 * Time: 21:28
 */
        ?>

@extends('admin.adminheader')
@section('body')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="color: #930974">Category wise reports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">products</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <table class="table">
            <tr>
            <form action="/searchcat" method="post">
                @csrf
              <td>  <input type="text" name="search" placeholder="Search..." required/>
                <button type="submit" style="background-color: greenyellow" name="srch">Search</button></td>

            </form></tr>
        </table>
        <!-- Main content -->


        <table  class="table">
            {{--<p><tr><td colspan="7" align="center" ></td></tr></p>--}}
            <tr style="background-color: orange">

                <th>Category</th>
                <th>Product</th>
                <th>Brand  </th>
                <th>Product image</th>
                {{--<th> Payment</th>--}}
                {{--<th>Date of order</th>--}}
                {{--<th>reject</th>--}}
            </tr>
            @foreach($result as $value)

                <tr style="background-color: lightgoldenrodyellow">
                    <td>{{$value->cat_brand}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->cat_brand}}</td>

                    <td>
                        {{--<a href="{{ asset('uploads/'.$value->image) }}">Product image</a>--}}
                        <img src="{{asset('uploads/'.$value->image)}} " width="50" height="50"/>
                        <img src="{{asset('uploads/'.$value->image2)}} " width="50" height="50"/>
                        <img src="{{asset('uploads/'.$value->image3)}} " width="50" height="50"/>
                        <img src="{{asset('uploads/'.$value->image4)}} " width="50" height="50"/>
                    </td>
                    {{--<td></td>--}}
{{--                    <td>{{$value->date}}</td>--}}

                    {{--<td> <a href="#"> Approve/reject</a>  </td>--}}

                </tr>


            @endforeach
        </table>

        <!-- /.content -->

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- /.content-wrapper -->
@endsection
