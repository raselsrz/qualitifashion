<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

   @stack('css')
   <style>


@import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

/* Bootstrap Icons */
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");

      .pagination .page-item.active .page-link {
      background-color: #00d4ff; /* Set your desired active background color */
      border-color: #00d4ff;     /* Match the border color */
      color: #fff;               /* Set text color for better readability */
  }
  
  .pagination .page-item .page-link {
      color: #00d4ff;            /* Default color for links */
  }
  
  .pagination .page-item .page-link:hover {
      background-color: #00d4ff; /* Hover background color */
      color: #fff;               /* Hover text color */
  }

  
  
   </style>

</head>
<body>
     @include('admin.includes.header')
     @yield('content')
     @include('admin.includes.footer')
     @stack('js')
</body>
</html>