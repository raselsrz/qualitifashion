@extends('layouts.admin')
@section('content')
 

 <div class="h-screen flex-grow-1 overflow-y-lg-auto">

<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">

        <div class="card shadow border-0 mb-7">
            
            <div class="card-header add_cat">
                {{-- delete button right --}}
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-0">View Orders</h5>
                    </div> 
            </div>
            </div>

        <div class="card shadow border-0 mb-7 add-container">
            <div class="card-body">
                <form  enctype="multipart/form-data">
                
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$orders->name}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Phone</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$orders->phone}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">City</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$orders->city}}" required>
                    </div>

                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Address</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$orders->address}}" required>
                    </div>

                    {{-- total price --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Total Price</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$orders->total}}" required>
                    </div>

                    {{-- sub total price --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Sub Total Price</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$orders->subtotal}}" required>
                    </div>

                    {{-- product list  --}}
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Product List</label>
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-md-4 mt-2">
                                <div class="card shadow-sm">
                                    <img src="{{ asset('images/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 150px; object-fit: cover;">
                                    <div class="card-body text-center">
                                        <h6 class="card-title">{{ $product->name }}</h6>
                                        <p class="card-text fw-bold">Price:
                                            {{ number_format($product->price, 2) }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    




            
                </form>
                
            </div>
        </div>
    </div>
</main>
</div>

@stop
@push('css')
 

@endpush

@push('js')
 
 
 
@endpush