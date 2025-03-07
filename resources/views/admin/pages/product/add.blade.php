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
                        <h5 class="mb-0">Add Product</h5>
                    </div> 
            </div>
            </div>

            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="bi bi-check-circle"></i></span>
                <span class="alert-text
                ">{{Session::get('success')}}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="bi bi-x-circle"></i></span>
                <span class="alert-text
                ">{{$error}}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
            @endif

        <div class="card shadow border-0 mb-7 add-container">
            <div class="card-body">
                <form action="{{ route('admin.product.addProccess') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" id="price" required min="0" value="{{old('price')}}">
                    </div>
                
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" required>{{old('description')}}</textarea>
                    </div>


                    <div class="row">
                        {{-- product color and slide_img --}}
                    <div class="mb-3 col-md-6">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" name="color" class="form-control" id="color" value="{{old('color')}}" required>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="slide_img" class="form-label">Slide Image</label>
                        <input type="file" name="slide_img" class="form-control" id="slide_img" required>
                        <br>
                        <input type="text" name="slide_img_url" class="form-control" id="slide_img_url" placeholder="https://example.com/image.jpg" value="{{old('slide_img_url')}}">
                    </div>

                    </div>
                    

                
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Or Enter Image URL</label>
                        <input type="text" name="image_url" class="form-control" id="image_url" placeholder="https://example.com/image.jpg" value="{{old('image_url')}}">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Add Product</button>
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