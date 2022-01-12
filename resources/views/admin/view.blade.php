

    @extends('admin.adminheader')
    @section('body')
        @foreach($result as $value)

            <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>More Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item active"> {{$value->name}}</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">PERSONAL DETAILS &nbsp;&nbsp;-- &nbsp;&nbsp;{{$value->name}}</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered" >
                                            <thead>

                                            <tr>
                                                {{--<th style="width: 10px">#</th>--}}
                                                {{--<th>Task</th>--}}
                                                {{--<th>Progress</th>--}}

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr bgcolor="#f0f8ff">

                                                {{--<th></th>--}}

                                                <td>Contact Number</td>
                                                <td>{{$value->mobile}}</td>
                                            </tr>
                                            <tr bgcolor="#ffe4c4">
                                                {{--<td>2.</td>--}}
                                                <td>Address</td>
                                                <td>{{$value->address}}</td>
                                            </tr>
                                            <tr bgcolor="#f0f8ff">
                                                {{--<td>3.</td>--}}
                                                <td>Pincode</td>
                                                <td>{{$value->pincode}}</td>
                                            </tr>
                                            {{--<tr bgcolor="#f0f8ff">--}}
                                                {{--<td>4.</td>--}}
                                                {{--<td>District</td>--}}
                                                {{--<td>{{$value->district}}</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr bgcolor="#f0f8ff">--}}
                                                {{--<td>5.</td>--}}
                                                {{--<td>Location</td>--}}
                                                {{--<td>{{$value->location}}</td>--}}
                                            {{--</tr >--}}
                                            {{--<tr bgcolor="#f0f8ff">--}}
                                                {{--<td>6.</td>--}}
                                                {{--<td>Business Type</td>--}}
                                                {{--<td>{{$value->type}}</td>--}}
                                            {{--</tr>--}}
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- /.card -->
                            </div>
                            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">COMPANY DETAILS</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered" >
                                        <thead>

                                        <tr>
                                            {{--<th style="width: 10px">#</th>--}}
                                            {{--<th>Task</th>--}}
                                            {{--<th>Progress</th>--}}

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr bgcolor="#ffe4c4">
                                            {{--<td>1.</td>--}}
                                            <td>Legal company Name</td>
                                            <td>{{$value->Lname}}</td>
                                        </tr>
                                        <tr bgcolor="#f0f8ff">
                                            {{--<td>2.</td>--}}
                                            <td>Office Number</td>
                                            <td>{{$value->num}}</td>
                                        </tr>
                                        <tr bgcolor="#ffe4c4">
                                            {{--<td>3.</td>--}}
                                            <td>State</td>
                                            <td>{{$value->state}}</td>
                                        </tr>
                                        <tr bgcolor="#f0f8ff">
                                            {{--<td>4.</td>--}}
                                            <td>District</td>
                                            <td>{{$value->district}}</td>
                                        </tr>
                                        <tr bgcolor="#ffe4c4">
                                            {{--<td>5.</td>--}}
                                            <td>Location</td>
                                            <td>{{$value->location}}</td>
                                        </tr >
                                        <tr bgcolor="#f0f8ff">
                                            {{--<td>6.</td>--}}
                                            <td>Business Type</td>
                                            <td>{{$value->type}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                {{--<div class="card-footer clearfix">--}}
                                    {{--<ul class="pagination pagination-sm m-0 float-right">--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                            <!-- /.card -->
                        </div>

                        <!-- /.col -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"> STORE INFORMATION</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>

                                            <tr>
                                                {{--<th style="width: 10px">#</th>--}}
                                                {{--<th>Task</th>--}}
                                                {{--<th>Progress</th>--}}
                                                {{--<th style="width: 40px">Label</th>--}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr bgcolor="#f0f8ff">

                                            <td>Store Name</td>
                                            <td colspan="8">{{$value->storename}}</td>
                                        </tr>
                                        <tr bgcolor="#ffe4c4">
  @foreach($result1 as $value1)
                                            <td>Selling categories</td>
                                            <td>{{$value1->cat_brand}}
                                                </td>
      @endforeach
                                        </tr>
                                        <tr bgcolor="#f0f8ff">

                                            <td>Store Logo</td>
                                            <td colspan="8">
                                            {{--<img src="{{asset('uploads/'.$value->logo)}} " width="50" height="50"/>--}}
                                                {{--<br/>--}}
                                                <a href="{{ asset('uploads/'.$value->logo) }}">Logo</a>
                                                </td>
                                        </tr>

                                        <br/>
                                        </tbody>
                                    </table>
                                    <br/><br/><br/><br/>
                                </div>
                                <!-- /.card-body -->
                                {{--<div class="card-footer clearfix">--}}
                                    {{--<ul class="pagination pagination-sm m-0 float-right">--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title" >BUSINESS DETAILS</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>

                                            <tr>
                                                {{--<th style="width: 10px">#</th>--}}
                                                {{--<th>Task</th>--}}
                                                {{--<th>Progress</th>--}}
                                                {{--<th style="width: 40px">Label</th>--}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr bgcolor="#dcdcdc">

                                            <td> Trade Licence Number</td>
                                            <td>{{$value->tln}}</td>
                                        </tr>
                                        <tr bgcolor="#ffe4e1">

                                            <td>Trade Licence Document</td>
                                            <td><a href="{{ asset('uploads/'.$value->tld) }}">Trade Licence Document</a>
                                                </td>
                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>PAN Number</td>
                                            <td>{{$value->pann}}
                                               </td>
                                        </tr>
                                        <tr bgcolor="#ffe4e1">

                                            <td>PAN Card</td>
                                            <td><a href="{{ asset('uploads/'.$value->panc) }}">PAN Card</a>

                                                </td>
                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>ID Proof</td>
                                            <td><a href="{{ asset('uploads/'.$value->idp) }}">ID Proof</a></td>
                                        </tr>
                                        <tr bgcolor="#ffe4e1">

                                            <td>FSSAI Lic.No.(Mandatory for food related vendor)</td>
                                            <td>{{$value->fssai}}</td>
                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>Shipping Mode</td>
                                            <td>{{$value->ship}}</td>
                                        </tr>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                {{--<div class="card-footer clearfix">--}}
                                    {{--<ul class="pagination pagination-sm m-0 float-right">--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                            <!-- /.card -->
                        </div>

                        <!-- /.col -->
                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">BANK DETAILS</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <table class="table table-bordered">
                                        <thead>

                                        <tr>
                                            {{--<th style="width: 10px">#</th>--}}
                                            {{--<th>Task</th>--}}
                                            {{--<th>Progress</th>--}}
                                            {{--<th style="width: 40px">Label</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr bgcolor="#ffe4e1">

                                            <td>Name in Bank Details</td>
                                            <td>{{$value->bankname}}</td>
                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>Bank Account type</td>
                                            <td>{{$value->acctype}}
                                                </td>
                                        </tr>
                                        <tr bgcolor="#ffe4e1">

                                            <td>Bank Account Number</td>
                                            <td>{{$value->accnum}}
                                                </td>
                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>Bank IFSC Code</td>
                                            <td>{{$value->ifsc}}
                                               </td>
                                        </tr>
                                        <tr bgcolor="#ffe4e1">

                                            <td>Cancelled Cheque</td>
                                            <td>   <a href="{{ asset('uploads/'.$value->cc) }}">Cancelled Cheque</a>
                                            </td>
                                        </tr>
                                        <tr bgcolor="#dcdcdc">

                                            <td>Signature</td>
                                            <td>   <a href="{{ asset('uploads/'.$value->sign) }}">Signature</a>
                                            </td>
                                        </tr>

                                        </tbody>
                                        </table>

                                      <br/><br/>
                                </div>
                                <!-- /.card-body -->
                                {{--<div class="card-footer clearfix">--}}
                                    {{--<ul class="pagination pagination-sm m-0 float-right">--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                        {{--<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                            <!-- /.card -->
                        </div>
                        </div>

                        <!-- /.row -->
                     </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                </div>
                            <div class="card-body">

                            <table class="table">
                        <tr style="color:  orangered;background-color: palegreen">
                            <td>  Vendor status :</td>
                            @if($value->adminstatus == 1)

                                <td style="color: #ff253a">COMPLETED</td>

                            @else

                                <td style="color: #ff253a">STILL PENDING</td>

                            @endif

                        </tr>


                    </table>
                            </div>
                            </div>
                        </div>

{{--@if($value->regstatus == 1 )--}}
    {{--@else--}}
                    <div class="col-sm-6">
                        <div class="card">

                            <div class="card-body">

                            <table class="table">




                        <tr>

                            <td><a href="/approve/{{$value->id}}" class="btn btn-primary"> Accept </a></td>

{{--                            <td><a href="/disapprove/{{$value->id}}"> Disapprove</a></td>--}}
                            <form method="post" action="/disapprove/{{$value->id}}">
                                @csrf
                                <td >
                                    {{--style=" color: #d91a72">Reason to Reject : &nbsp;--}}
                                    {{--<input type="text" value="Reason" class="btn btn-primary" name="reason" id="reason"> &nbsp;--}}
                                    {{--</td>--}}
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Reason to reject" name="reason" id="reason">
                                        <div class="input-group-append">
                                            <input  type="submit" class="btn btn-danger" value="Reject" >
                                    {{--<input type="submit" class="btn btn-danger" value="Disapprove" style="background-color: dodgerblue">--}}
                                </td>
                            </form>
                        @if($value->adminstatus == 1)

                                {{--<td>Approve</td>--}}

                            @else

                                {{--<td>Disapprove</td>--}}

                                {{--                <td>{{$value->adminstatus}}</td>--}}

                        </tr>
                        @endif
                    </table>
                </div>
                    </div>
                </div>
</div>
{{--@endif--}}
                <h5 style="color: #e90f92"><a href="/backv"> Back</a></h5><br/>

                @endforeach
                            <!-- /.card -->
                     <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        @endsection