@extends('website-pages.seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Seller Dashboard')
@section('seller')
    <div class="content-wrapper ">
        <!-- Content Header (Page header) -->
        <div class="content-header ">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h4 class="m-0"> Welcome Back <span style="color:red;"> {{ Auth::user()->name }}</span> !!! 🎉🎉🎉
                        </h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Overview</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-gray">
                            <div class="inner">
                                <h3>150</h3>

                                <p style="font-size: 1.5rem;">Pending Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-archive"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-teal">
                            <div class="inner">
                                <h3>{{ $product_approved }}</h3>

                                <p style="font-size: 1.5rem;">Approved Products</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="{{ route('seller.all.products') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-purple">
                            <div class="inner">
                                <h3>{{ $product_disapproved }}</h3>

                                <p style="font-size: 1.5rem;">Disapproved Products</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <a href="{{ route('seller.all.products') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>{{ $product_rejected }}</h3>

                                <p style="font-size: 1.5rem;">Rejected Products</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <a href="{{ route('seller.all.products') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>

            </div>
        </div>
    </div>
@endsection
