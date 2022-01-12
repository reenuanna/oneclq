<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 09-06-2021
 * Time: 14:29
 */
        ?>
@extends('user.home')

@section('body')




    <div class="cart_wrapper">
        <div class="container mb-3">
            <div class="row">
                <div class="page-title-overlap col-12">
                    <div class="container d-lg-flex justify-content-between align-items-center py-2 py-lg-3">
                        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2 d-none d-lg-block">
                            <div class="hed_tracker">
                                <ul class="list-unstyled multi-steps">

                                    <li class="font-size-ms">
                                        <i data-eva="checkmark-circle-2-outline" class="mr-1"></i>payment
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                            <h1 class="h3 mb-0">payment</h1>
                            <nav class="breadcrumb invert p-0 mb-0" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-light mt-n1 pl-0 mb-0 py-0">
                                    <li class="breadcrumb-item d-flex mt-1"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item d-flex mt-1">payment</li>
                                </ol>
                            </nav>
                        </div>
                        {{--</div>--}}
                    </div>

                    <div class="actions row">
                        <div class="col-12">

                            <div class="card mt-15">
                                <div class="card-body">
                                    <div class="col-12 col-md-7 pl-0">

                                        <h3 class="card-title card-title-sm mb-0" style="color: orange">Select a payment method</h3>
                                        <small class="font-size-ms text-muted">Get Instant refund on cancellations | Zero payment failures</small>



                                                <div class="a-box pmts-instrument-box">
                                                    <div class="custom-radio custom-control"  >
                                                        <input type="radio" class="custom-control-input radio" id="pm-2" name="payment-option"     >
                                                        <label class="custom-control-label leading-tight" for="pm-2">
                                                            <div class="font-size-md font-weight-bold ml-2">cash on Delivery</div>
                                                            <small class="d-inline-block ml-2 text-muted font-size-ms">on delivery time</small>
                                                        </label>

                                                    </div>        </div>    </div>
                                    <div id="app">
                                        <main class="py-4">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6 offset-3 col-md-offset-6">


                                                        <form name="frm" method="post" action="/cod">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{session('uid')}}" >
                                                            <input type="hidden" name="buyid" value="{{$price->buyid}}">
                                                            <input type="hidden" name="prod_id" value="{{$price->prod_id}}">
                                                            <input type="hidden" name="amount" value="{{$amt}}">
                                                            @foreach($result3 as $value3)
{{--                                                              value -  {{$value3->cod}}--}}
                                                                @if($value3->cod == 'on')

                                                                    <input type="submit" value="Confirm" class="btn btn-black btn-sm mt-3" >


                                                                    @else
                                                                    No cod

                                                            {{--<a href="/" class="btn btn-black btn-sm mt-3" id="confirm">confirm</a>--}}
                                                                @endif
                                                                @endforeach
                                                            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                                                            <Script>
                                                                $('#confirm').click(function(){
                                                                    swal("Order Successful", "Purchase more","success");

                                                                });

                                                            </Script>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </main>
                                    </div>





                                    <div class="card mt-15">
                                    <div class="card-body">
                                    <div class="a-box pmts-instrument-box mb-15">
                                    <div class="custom-radio custom-control" id="online">
                                    <input type="radio" class="custom-control-input radio" id="pm-1" name="payment-option" >
                                    <label class="custom-control-label leading-tight" for="pm-1">
                                    <div class="font-size-md font-weight-bold ml-2">Online Payment<br/></div>
                                    <small class="d-inline-block ml-2 text-muted font-size-ms"> credit card/Debit card/UPI.<br/>
                                    </small>
                                    </label>
                                    </div>
                                    </div>
                        <div id="app">
                            <main class="py-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 offset-3 col-md-offset-6">


                                            <div class="card card-default">

                                                <div class="card-body text-center">
                                                    <form action="{{ route('razorpay.payment.store') }}" method="POST" >
                                                        @csrf
                                                        <input type="hidden" name="user_id" value="{{session('uid')}}" >
                                                        <input type="hidden" name="buyid" value="{{$price->buyid}}">
                                                        <input type="hidden" name="prod_id" value="{{$price->prod_id}}">
                                                        <input type="hidden" name="amount" value="{{$amt}}">

                                                        <script src="https://checkout.razorpay.com/v1/checkout.js"
                                                                data-key="{{ env('RAZORPAY_KEY') }}"
                                                                data-amount="{{$amt}}00"
                                                                data-currency="INR"
                                                                data-buttontext="Pay {{$amt}} INR"
                                                                data-name="onecliq"
                                                                data-description="Rozerpay"
                                                                data-image="https://example.com/your_logo"
                                                                data-prefill.name="name"
                                                                data-prefill.email="email"
                                                                data-theme.color="orange"></script>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
    </div></div></div></div></div>


@endsection
