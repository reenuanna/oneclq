@extends('admin.adminheader')
@section('body')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="color: #930974">REGISTERED VENDORS</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Vendors</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->


        <table  class="table">
        {{--<p><tr><td colspan="7" align="center" ></td></tr></p>--}}
            <tr style="background-color: orange">
                <th>Name</th>
                <th>Contact Number</th>
                {{--<th>Address</th>--}}
                {{--<th>Pincode</th>--}}
                <th>Email</th>
                <th>Register Status</th>
                <th>More Details</th>
                <th> Status</th>
                <th>Status Description</th>
                <th>Delete</th>
            </tr>
            @foreach($result as $value)

            <tr style="background-color: lightgoldenrodyellow">
                <td><a href="/vendorproduct/{{$value->id}}">{{$value->name}}</td>
                <td>{{$value->mobile}}</td>
{{--                <td>{{$value->address}}</td>--}}
{{--                <td>{{$value->pincode}}</td>--}}
                <td>{{$value->email}}</td>
                @if($value->regstatus == 0)


                <td style="color: #ff253a">Pending</td>

                @else

                <td>Completed</td>

{{--                <td>{{$value->adminstatus}}</td>--}}
                @endif
                <td><a href="/view/{{$value->id}}"> View More..</a>

                    @if($value->adminstatus == 1)

                <td>Completed</td>
@elseif($value->adminstatus == 0)
                    <td style="color: red">Pending</td>

                @else
                    <td style="color: red">Rejected</td>

                @endif
                <td>{{$value->reason}}</td>
                {{--</td>--}}
                {{--<td><a href="/approve/{{$value->id}}"> Approve</a>--}}


                {{--</td>--}}
                {{--<td><a href="/Disapprove/{{$value->id}}"> Disapprove</a>--}}


                {{--</td>--}}
                <td> <a href="/deletev/{{$value->id}}"class="btn btn-danger btn-sm">X</a></td>

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
