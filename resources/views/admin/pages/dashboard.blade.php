@extends('layouts.admin')
@section('content')


    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">
                                <img src="https://bytewebster.com/img/logo.png" width="40">Dashboard</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                                <a href="{{url('/')}}" target="_blank" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                    <i class="bi bi-binoculars-fill"></i>
                                    </span>
                                    <span>Print House</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 overflow-x" ></div>
                    <!-- Nav -->
                    
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
                <div class="row g-6 mb-6">

                    <!-- Total Orders -->
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0 bg-primary text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-white text-sm d-block mb-2">Total Orders</span>
                                        <span class="h3 font-bold mb-0">{{ DB::table('forms')->count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-white text-primary rounded-circle shadow">
                                            <i class="bi bi-cart3 fs-3"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Products -->
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0 bg-success text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-white text-sm d-block mb-2">Total Products</span>
                                        <span class="h3 font-bold mb-0">{{ DB::table('products')->count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-white text-success rounded-circle shadow">
                                            <i class="bi bi-box-seam fs-3"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </main>

        
    

@stop
@push('js')
 <style>
    /* hello */
 </style>
@endpush