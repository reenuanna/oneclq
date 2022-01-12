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






                                    <div class="card mt-15">
                                        <div class="card-body">

                                            <div id="app">
                                                <main class="py-4">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-6 offset-3 col-md-offset-6">
                                                                @if($message = Session::get('error'))
                                                                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                        <strong>Error!</strong> {{ $message }}
                                                                    </div>
                                                                @endif
                                                                @if($message = Session::get('success'))
                                                                    <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                        <strong>Success!</strong> {{ $message }}
                                                                    </div>
                                                                @endif
                                                                    <a href="/" class="btn btn-success">Continue Shopping</a>
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
