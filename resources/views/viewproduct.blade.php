<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 15-04-2021
 * Time: 14:16
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
                        <h1 class="m-0 text-dark"></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/vendordash">Home</a></li>
                            <li class="breadcrumb-item active">Name</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        {{--<form method="post" action="/prdSubCat">--}}
            {{--@csrf--}}
        <form id="regiration_form" novalidate action="/saveproduct/{{session('sessid')}}"  method="post" class="product" enctype="multipart/form-data">
            @csrf
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- Small boxes (Stat box) -->

                <div class="col-sm-6">
                    <table class="table">
                        <thead class="table-warning">
                        <tr>
                            <th> Category</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>

                            <select id="cat" class="form-control" name="brand">
                                <option selected="selected" disabled="disabled">Select your Category</option>

                                @foreach($result2 as $value1)

                                  <option value="{{$value1->category}}" >  {{$value1->cat_brand}}</option>
                                @endforeach
                            </select>
                            @error("brand")
                            <p style="color:red">{{$errors->first("brand")}}
                            @enderror
                        </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6" style="display:none" id="subs" name="cat">
                    <table class="table">
                        <thead class="table-warning">
                        <tr>
                            <th>Selling item</th>
                            <th></th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                        <td>

                            <select id="sub" class="form-control" name="cat">
                                <option selected="selected" disabled="disabled">  Select</option>

                            </select>
                            @error("cat")
                            <p style="color:red">{{$errors->first("cat")}}
                            @enderror
                        </td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
    </section>
<section class="container">
    <div class="row">
        <div class="col-sm-12" id="prd">

                                <h2 style="background-color:orange">PRODUCT DETAILS</h2>
                                <div class="form-group">
                                    <label for="name">Brand Name : </label>
                                    <input type="text" class="form-control" id="prod_name" name="prod_name" placeholder="product name">
                                    @error("prod_name")
                                    <p style="color:red">{{$errors->first("prod_name")}}
                                    @enderror
                                </div>
                                <h3> Unit and Measurement</h3>
            <h6 style="color: lightcoral">IF not applicable, put NA</h6>
                                <div class="form-group">
                                    <label for="Yourweight">Weight</label>
                                    <input type="text" class="form-control" id="weight" placeholder="weight" name="weight">
                                    @error("weight")
                                    <p style="color:red">{{$errors->first("weight")}}
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Height">Height</label>
                                    <input type="text"  class="form-control" name="height" placeholder="height" name="height">
                                    @error("height")
                                    <p style="color:red">{{$errors->first("height")}}
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Length">Length</label>
                                    <input type="text"  class="form-control" name="length" placeholder="length" name="length">
                                    @error("length")
                                    <p style="color:red">{{$errors->first("length")}}
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Width">Width</label>
                                    <input type="text"  class="form-control" name="width" placeholder="width" name="width">
                                    @error("width")
                                    <p style="color:red">{{$errors->first("width")}}
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Stock">Stock</label>
                                    <input type="text"  class="form-control" name="stock" placeholder="stock" name="stock">
                                    @error("stock")
                                    <p style="color:red">{{$errors->first("stock")}}
                                    @enderror
                                </div>
            <h3>  PRODUCT IMAGES</h3>

                                        <div class="form-group">
                                    <label for="Image">Main Image</label>
                                    <input type="file"  class="form-control" name="image" placeholder="image" name="image" multiple>
                                    @error("image")
                                    <p style="color:red">{{$errors->first("image")}}
                                    @enderror
                                </div>
            <div class="form-group">
                <label for="Image1"> Image 1</label>
                <input type="file"  class="form-control" name="image2" placeholder="image" name="image2" multiple>

            </div>
            <div class="form-group">
                <label for="Image2">Image 2</label>
                <input type="file"  class="form-control" name="image3" placeholder="image" name="image3" multiple>

            </div>
            <div class="form-group">
                <label for="Image3"> Image 3</label>
                <input type="file"  class="form-control" name="image4" placeholder="image" name="image4" multiple>

            </div>
                                <h3>  PRICE DETAILS</h3>
                                <div class="form-group">
                                    <label for="MRP">MRP </label>
                                    <input type="text" class="form-control" name="MRP" id="MRP" placeholder="MRP :">
                                    @error("MRP")
                                    <p style="color:red">{{$errors->first("MRP")}}
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Price">Selling Price</label>
                                    <input type="text" class="form-control" name="Sell_price" id="Sell_price" placeholder="Selling Price">
                                    @error("Sell_price")
                                    <p style="color:red">{{$errors->first("Sell_price")}}
                                    @enderror
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label for="GST">GST</label>--}}
                                    {{--<input type="text" class="form-control" name="GST" id="GST" value="" placeholder="GST">--}}
                                    {{--@error("GST")--}}
                                    {{--<p style="color:red">{{$errors->first("GST")}}--}}
                                    {{--@enderror--}}
                                {{--</div>--}}
                                <h3>  DETAILS OF PRODUCT</h3>
                                    <div class="form-group">
                                        <label for="details">Description </label>
                                         <textarea class="form-control" name="details" id="details" placeholder="Description :"></textarea>
                                             @error("details")
                                        <p style="color:red">{{$errors->first("details")}}
                             @enderror
                                     </div>
                                    <div class="form-group">
                                     <label for="warranty">Warranty details </label>
                                 <input type="text" class="form-control" name="warranty" id="warranty" placeholder="warranty details :">

                                </div>
                            <h3>  DELIVERY DETAILS</h3>
                                <div class="form-group">
                                    <label for="refundable">Non refundable</label>
                                    <input type="checkbox" class="form-control" name="non_refund" id="non_refund" >

                                </div>
                                <div class="form-group">
                                    <label for="Free">Free Delivery</label>
                                    <input type="checkbox" class="form-control" name="free_delivery" id="free_delivery" placeholder="ID Proof">
                                </div>
                                <div class="form-group">
                                    <label for="cod">Cash on Delivery</label>
                                    <input type="checkbox" class="form-control" name="cod" id="cod" placeholder="Icod">
                                 </div>
                                <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />


                        </form>

        </div>
    </div>

</section>
</div>
    <script>

        $(document).ready(function(){
            $("#cat").on('change', function()
            {
                var catid=$("#cat").val();
//                alert(catid);    // alert('hi');

                $.ajax({
                    type:"get",
                    url:"/prdSubCat/"+catid,
                    success:function(result)
                    {
//                        alert(result);
                        $('#sub').html(result);
                    }
                });
                $("#subs").show();
            });
//            $("#sub").on('change',function(){
//
//                $("#prd").show();
//            });
//            $("#sub").on('click',function(){
//
//                $("#prd").show();
//            });
        });
    </script>
    <!-- /.content -->






@endsection('body')
