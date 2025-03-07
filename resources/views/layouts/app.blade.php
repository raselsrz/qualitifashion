<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('include.head')


    <body class="gradient">

    @yield('content')


    @include('include.footer')
    

    {!! get_option('footer_codes','') !!}

</body>
</html>