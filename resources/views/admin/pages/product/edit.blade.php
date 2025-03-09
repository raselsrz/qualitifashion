@extends('layouts.admin')

@section('content')
<div class="h-screen flex-grow-1 overflow-y-lg-auto">
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <div class="card shadow border-0 mb-7">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0">Edit Product</h5>
                        </div> 
                    </div>
                </div>

                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="bi bi-check-circle"></i></span>
                    <span class="alert-text">{{ Session::get('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="bi bi-x-circle"></i></span>
                        <span class="alert-text">{{ $error }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                @endif

                <div class="card-body">
                    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Product Name</label>
                            <input type="text" name="name" class="form-control" id="title" value="{{ $product->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}" min="0" required>
                        </div>

                        <div class="mb-3">
                            <label for="old_price" class="form-label">Old Price</label>
                            <input type="number" name="old_price" class="form-control" id="old_price" value="{{ get_field('old_price','price',$product->id) }}" min="0">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" required>{{ $product->description }}</textarea>
                        </div>

                        <div id="input-container-dl">
                            @foreach($product->slider_data ? json_decode($product->slider_data, true) : [] as $key => $slider)
                            <div class="row mb-3 align-items-end">
                                <div class="col-md-4">
                                    <label class="form-label">Color</label>
                                    <input type="text" name="colors[]" class="form-control" placeholder="Enter color (e.g., Red)" value="{{ $slider['color'] }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Slide Image</label>
                                    <input type="file" name="slider_img[]" class="form-control">
                                    <small>Current: <a href="{{ asset('images/' . $slider['image']) }}" target="_blank">View Image</a></small>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-danger mt-4" onclick="removeInput(this)">Delete</button>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <button type="button" class="btn btn-primary mb-3" onclick="addDlinput()">Add More</button>

                        <div class="mb-3">
                            <label for="size" class="form-label">Size</label>
                            <select name="size[]" class="form-select" id="size" required multiple>
                                @php $selectedSizes = json_decode($product->size, true) ?? []; @endphp
                                <option value="S" {{ in_array('S', $selectedSizes) ? 'selected' : '' }}>S</option>
                                <option value="M" {{ in_array('M', $selectedSizes) ? 'selected' : '' }}>M</option>
                                <option value="L" {{ in_array('L', $selectedSizes) ? 'selected' : '' }}>L</option>
                                <option value="XL" {{ in_array('XL', $selectedSizes) ? 'selected' : '' }}>XL</option>
                                <option value="XXL" {{ in_array('XXL', $selectedSizes) ? 'selected' : '' }}>XXL</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Main Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                            <small>Current: <a href="{{ asset('images/' . $product->image) }}" target="_blank">View Image</a></small>
                        </div>

                        <button type="submit" class="btn btn-sm bg-surface-secondary btn-neutral" style="width: 20%;">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

@stop

@push('css')
<style>
    .input-group {
        margin-bottom: 10px;
    }
</style>
<link rel="stylesheet" href="https://unpkg.com/jodit@4.0.1/es2021/jodit.min.css" />
@endpush

@push('js')
<script src="https://unpkg.com/jodit@4.0.1/es2021/jodit.min.js"></script>
<script>
    // Size select dropdown
    $(document).ready(function() {
        $('#size').select2();
    });

    function addDlinput() {
        const inputContainer = document.getElementById("input-container-dl");
        const newInput = document.createElement("div");
        newInput.classList.add("row", "mb-3", "align-items-end");
        newInput.innerHTML = `
            <div class="col-md-4">
                <input type="text" name="colors[]" class="form-control" placeholder="Enter color (e.g., Red)">
            </div>
            <div class="col-md-4">
                <input type="file" name="slider_img[]" class="form-control">
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-danger" onclick="removeInput(this)">Delete</button>
            </div>
        `;
        inputContainer.appendChild(newInput);
    }

    function removeInput(button) {
        button.closest('.row').remove();
    }
</script>
@endpush
