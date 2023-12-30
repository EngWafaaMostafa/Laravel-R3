<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <!-- Preloader -->
    @include('includes.preloader')
    <!-- End Preloader -->



    <!-- Header Area -->
    @include('includes.header')

    <!-- End Header Area -->

    @yield('content')
    <!-- Footer Area -->
    @include('includes.footer')
    <!--/ End Footer Area -->

    @include('includes.footerJS')
</body>

</html>