@extends('website-pages.admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Dashboard')
@section('admin')
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


        <!-- /.content-header -->


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-gray">
                            <div class="inner">
                                <h3>{{ $product_disapproved_count }}</h3>

                                <p style="font-size: 1.5rem;">Pending Approve</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-archive"></i>
                            </div>
                            <a href="{{ route('manage.all.products') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-teal">
                            <div class="inner">
                                <h3>{{ $formattedTotalcustomers }}</h3>

                                <p style="font-size: 1.5rem;">Woodify Customers</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="{{ route('all.customer') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-purple">
                            <div class="inner">
                                <h3>{{ $formattedTotalSellers }}</h3>

                                <p style="font-size: 1.5rem;">Woodify Sellers</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <a href="{{ route('all.seller') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>{{ $formattedTotaladmins }}</h3>

                                <p style="font-size: 1.5rem;">Woodify Admins</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <a href="{{ route('all.admin') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-gray">
                            <div class="inner">
                                <h3>{{ $all_sales }}</h3>

                                <p style="font-size: 1.5rem;">Total Sales</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-archive"></i>
                            </div>
                            <a href="{{ route('all.sales') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-teal">
                            <div class="inner">
                                <h3>$ {{ $formattedPrice }}</h3>

                                <p style="font-size: 1.5rem;">Total Earn $ (Sellers)</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="{{ route('all.sales') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-purple">
                            <div class="inner">
                                <h3>$ {{ $onePercent }}</h3>

                                <p style="font-size: 1.5rem;">Woodify's Earn $ (1.5%)</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <a href="{{ route('all.sales') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>{{ $pending_orders }}</h3>

                                <p style="font-size: 1.5rem;">Pending Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <a href="{{ route('all.sales') }}" class="small-box-footer">
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
