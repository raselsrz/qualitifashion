<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('include.head')


    <body class="gradient">

    @yield('content')


    @include('include.footer')
    

    {!! get_option('footer_codes','') !!}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if(Session::has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ Session::get('success') }}",
                timer: 3000,
                showConfirmButton: false
            });
        @endif

        @if(Session::has('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: "{{ Session::get('error') }}",
                timer: 3000,
                showConfirmButton: false
            });
        @endif

    </script>

</body>
</html>