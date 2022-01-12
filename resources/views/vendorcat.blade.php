
@extends('vendorheader')
@section('body')
    @foreach($result as $value)


        {{--Approved--}}

        @if($value->adminstatus==1)
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
                                <th>Added Category</th>

                            </tr>
                            </thead>

                            <tr>
                            @foreach($result1 as $value1)

                                <tbody>



                                <td>{{$value1->cat_brand}}</td>
<td><a href="/vendorcatdelte/{{$value1->cat_id}}" class="btn btn-danger btn-sm">X</a> </td>
                                {{--<td>{{$value1->vcat_id}}</td>--}}
                                    {{--<a href="/addcate/{{$value1->vcat_id}}" > <b> +  </b></a></td>--}}
                                {{--<td> <a href="/delete/{{$value->cat_id}}"> Delete</a></td>--}}
                                </tr>  </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Add Category</h3>
                            </div>
                            <div class="form-group">

                            <form method="post" action="/vecategory">
                                @csrf
                            <!-- /.card-header -->
                            <!-- form start -->
                                <label for="examplebc"> <br>  </label>
                                <select class="form-control" name="category" placeholder="Your Selling categories">


                                    @foreach($result2 as $value2)

                                        <option value="{{$value2->cat_id}}">  {{$value2->cat_brand}}</option>
@endforeach
                                </select>

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
                </div>
                    <!-- /.container-fluid -->
                </div>
        </section>
        <!-- /.content -->
    </div>
        @elseif($value->adminstatus==0)
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
                                    <li class="breadcrumb-item active">Vendor / Pending </li>
                                    <li class="breadcrumb-item active">

                                        {{$value->name}}

                                    </li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <h1 style="color: limegreen">Registration process is pending</h1>
                        </div>
                    </div>
                </section>
            </div>
        @else
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
                                    <li class="breadcrumb-item active">Vendor / Rejected </li>
                                    <li class="breadcrumb-item active">

                                        {{$value->name}}

                                    </li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <h1 style="color: red">Contact Admin - 9207477128 </h1>
                        </div>
                    </div>
                </section>
            </div>

        @endif
    @endforeach
@endsection
