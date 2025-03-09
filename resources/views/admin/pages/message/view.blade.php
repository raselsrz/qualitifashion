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
                        <h5 class="mb-0">View message</h5>
                    </div> 
            </div>
            </div>

        <div class="card shadow border-0 mb-7 add-container">
            <div class="card-body">
                <form  enctype="multipart/form-data">
                
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$message->name}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Phone</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$message->phone}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Email</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$message->email}}" required>
                    </div>

                    {{-- message --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Message</label>
                        <textarea name="name" class="form-control" id="name" required rows="5">{{$message->message}}</textarea>
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