@extends('layouts.admin')
@section('content')

<div class="h-screen flex-grow-1 overflow-y-lg-auto">
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <div class="card shadow border-0 mb-7">
                <div class="card-header add_cat">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0">Add Product</h5>
                        </div>
                    </div>
                </div>

                {{-- Display Success Message --}}
                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="bi bi-check-circle"></i></span>
                        <span class="alert-text">{{ Session::get('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- Display Validation Errors --}}
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="bi bi-x-circle"></i></span>
                            <span class="alert-text">{{ $error }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                @endif

                <div class="card shadow border-0 mb-7 add-container">
                    <div class="card-body">
                        <form action="{{ route('admin.product.addProccess') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- Product Name --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
                            </div>

                            {{-- Product Price --}}
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" name="price" class="form-control" id="price" required min="0" value="{{ old('price') }}">
                            </div>
                            {{-- old_price --}}
                            <div class="mb-3">
                                <label for="old_price" class="form-label">Old Price</label>
                                <input type="number" name="old_price" class="form-control" id="old_price" required min="0" value="{{ old('old_price') }}">
                            </div>

                            {{-- Product Description --}}
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="content"  required>{{ old('description') }}</textarea>
                            </div>

                            <br>

                            <div id="input-container-dl">
                                <div class="row mb-3 align-items-end">
                                    <div class="col-md-4">
                                        <label class="form-label">Color</label>
                                        <input type="text" name="colors[]" class="form-control" placeholder="Enter color (e.g., Red)">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Slide Image</label>
                                        <input type="file" name="slider_img[]" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-danger mt-4" onclick="removeInput(this)">Delete</button>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="button" class="btn btn-primary mb-3" onclick="addDlinput()">Add More</button>
                            
                            <br>

                            {{-- size select --}}
                            <div class="mb-3">
                                <label for="size" class="form-label">Size</label>
                                <select name="size[]" class="form-select" id="size" required multiple>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>

                            {{-- Product Image Upload --}}
                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>

                            {{-- Product Image URL --}}
                            <div class="mb-3">
                                <label for="image_url" class="form-label">Or Enter Image URL</label>
                                <input type="text" name="image_url" class="form-control" id="image_url" placeholder="https://example.com/image.jpg" value="{{ old('image_url') }}">
                            </div>

                            {{-- Submit Button --}}
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection

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


    //size select
    $(document).ready(function() {
        $('#size').select2();
    });

    var editor = Jodit.make('#content')



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