




    <?php
    /**
     * Created by PhpStorm.
     * User: Anjali
     * Date: 13-04-2021
     * Time: 15:48
     */
    ?>

    @extends('vendorheader')

    @section('body');



    <div class="row" style="background-color: whitesmoke"align="center">
        <div class="col-sm-5 content">
            {{--<img src="/images/login-cover.j/pg" height="50">--}}
            <div style="font-size: medium;font-family:'Roboto', sans-serif" align="left">

                {{--<p><b>OneClick</b><br>India's First Regional Online Shopping</p>--}}
                {{--<p align="justify">--}}

            </div></div>

        <div class="col-sm-7" >
            <div class="bg-img" align="left">
                {{--<div class="login">--}}
                {{--<div class="progress">--}}
                {{--<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>--}}
                {{--</div>--}}
                <div class="form-group" align="left">
                    <label for="examplebc">Added categories : </label>
                    <select class="form-control" name="cat_brand" placeholder="Your Selling categories">
                        <option value="Select categories">Select categories </option>
                        <form onclick="/saveproduct/">
                            @foreach($result1 as $value1)

                                <option value="{{$value1->cat_brand}}">  {{$value1->cat_brand}}</option>

                        @endforeach

                    </select>
                    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
                    </form>
                    {{--<input type="text" class="form-control" id="brand" placeholder="Brand & Category" name="brand">--}}
                    <br>                    <br>
                    <br>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br>

                </div>
            </div>
        </div>
    </div>
    {{--</div>--}}

@endsection