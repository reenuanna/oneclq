<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 15-05-2021
 * Time: 20:32
 */
        ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

@extends('user.home')

@section('body')

    <div class="card bg-white">
        <div class="card-body">
            <div class="row">
                <dl class="col-12 col-lg-1 align-self-center">

                </dl>

                <h2>Review</h2>



                    <table  class="table">
                        <tr style="background-color: orange">
                            <th>Product</th>
                            <th>Image</th>
                           </tr>


                        <tr style="background-color: lightgoldenrodyellow">

                            @foreach($result6 as $value1)
                                <form name="reviewfrm" method="post" action="/reviewgive/{{$value1->prod_id}}">
                            <td>{{$value1->prod_name}}</td>
                            <td><img src="{{asset('uploads/'.$value1->image)}} " width="100" height="50"/></td>

                           </tr>

                        <tr style="background-color: lightgoldenrodyellow">

                           <td> <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Comments</span>
                                </div>
                                <textarea class="form-control" aria-label="comment" name="comment" id="comment"></textarea>
                            </div></td>
                           <td> <div id="rateYo"></div></td>
                        </tr>
                        <tr style="background-color: lightgoldenrodyellow">
                            <td>
                                <input type="submit" style="background-color: green">
                            </td>
                            <td></td>
                        </tr>
                        </table>
                </form>
                @endforeach

            </div>

        </div>
    </div>
    <script>
        $(function () {

            $("#rateYo").rateYo({
                normalFill: "#A0A0A0"
            });

        });

        var normalFill = $("#rateYo").rateYo("option", "normalFill"); //returns "#A0A0A0"


//        $("#rateYo").rateYo("option", "normalFill", "#B0B0B0");
    </script>
@endsection