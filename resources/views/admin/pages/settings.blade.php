@extends('layouts.admin')
@section('content')

<style>
    .input-group {
      margin-bottom: 10px;
    }
  </style>
 <div class="h-screen flex-grow-1 overflow-y-lg-auto">

<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
       
        <div class="card shadow border-0 mb-7">
            
            <div class="card-header add_cat">
                <h5 class="mb-0">Settings</h5>
                 
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
                <form action="{{
                    route('admin.settingsProccess')
                }}" method="POST" enctype="multipart/form-data">
                @csrf
                    
                <div class="mb-3">
                    <label for="sitename" class="form-label">Sitename</label>
                    <input type="text" name="sitename" value="{{get_option('sitename','')}}" class="form-control" id="siteTitle"  >
                </div>
                
                    
                
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo URL</label>
                    <input type="url" name="logo" class="form-control" id="logo"  value="{{get_option('logo','')}}" >
                </div>

                {{-- video link --}}
                <div class="mb-3">
                    <label for="logo" class="form-label">Video Link</label>
                    <input type="text" name="video_link" class="form-control" id="logo"  value="{{get_option('video_link','')}}" >
                </div>

                {{-- home page img --}}
                <div class="mb-3">
                    <label for="logo" class="form-label">Home Page Image</label>
                    <input type="url" name="home_page_img" class="form-control" id="logo"  value="{{get_option('home_page_img','')}}" >
                </div>

                {{-- dhaka in price --}}
                <div class="mb-3">
                    <label for="logo" class="form-label">Dhaka In Price</label>
                    <input type="text" name="dhaka_in_price" class="form-control" id="logo"  value="{{get_option('dhaka_in_price','')}}" >
                </div>

                {{-- dhaka out price --}}
                <div class="mb-3">
                    <label for="logo" class="form-label">Dhaka Out Price</label>
                    <input type="text" name="dhaka_out_price" class="form-control" id="logo"  value="{{get_option('dhaka_out_price','')}}" >
                </div>



                <div class="mb-3">
                    <label for="favicon" class="form-label">Favicon URL</label>
                    <input type="url" name="favicon" class="form-control" id="favicon"  value="{{get_option('favicon','')}}"  >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Site Email</label>
                    <input type="emaurlil" name="email" value="<?php echo htmlspecialchars(get_option('email',''));?>" class="form-control" id="email"  >
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Site Phone</label>
                    <input type="text" name="phone" value="<?php echo htmlspecialchars(get_option('phone',''));?>" class="form-control" id="phone"  >
                </div>
                
                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="text" name="facebook" value="<?php echo htmlspecialchars(get_option('facebook',''));?>" class="form-control" id="facebook"  >
                </div>

                <div class="mb-3">
                    <label for="telegram" class="form-label">Linkedin</label>
                    <input type="text" name="linkedin" value="<?php echo htmlspecialchars(get_option('linkedin',''));?>" class="form-control" id="telegram"  >
                </div>

                {{-- behance --}}
                <div class="mb-3">
                    <label for="telegram" class="form-label">Behance</label>
                    <input type="text" name="behance" value="<?php echo htmlspecialchars(get_option('behance',''));?>" class="form-control" id="telegram"  >
                </div>
                {{-- instagram --}}
                <div class="mb-3">
                    <label for="telegram" class="form-label">Instagram</label>
                    <input type="text" name="instagram" value="<?php echo htmlspecialchars(get_option('instagram',''));?>" class="form-control" id="telegram"  >
                </div>

                
                <div class="mb-3">
                    <label for="telegram" class="form-label">Header Codes</label>
                    <textarea name="header_codes" class="form-control" id="header_codes"  ><?php echo htmlspecialchars(get_option('header_codes',''));?></textarea>
                </div>
                <div class="mb-3">
                    <label for="footer_codes" class="form-label">Footer Codes</label>
                    <textarea name="footer_codes" class="form-control" id="footer_codes"  ><?php echo htmlspecialchars(get_option('footer_codes',''));?></textarea>
                </div>
                      
                  

                    <button type="submit" class="btn btn-sm bg-surface-secondary btn-neutral" style="width: 20%; " >Update</button>
                </form>
            </div>
        </div>
    </div>
</main>
</div>


@stop
@push('js')
 <link
  rel="stylesheet"
  href="https://unpkg.com/jodit@4.0.1/es2021/jodit.min.css"
/>
<script src="https://unpkg.com/jodit@4.0.1/es2021/jodit.min.js"></script>
          <script>
            
            var editor = Jodit.make('#content');
            var editor = Jodit.make('#footer_description');

            jQuery(document).ready(function($) {
    $('select').select2();
}); 
          </script> 
@endpush