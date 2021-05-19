<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$title ?? 'DTIK Fest'}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="icon" type="image/png" href="{{asset('/img/DTIK Fest.png')}}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    {{-- @yield('head') --}}
</head>

<body>

    @if (request()->is('admin/*'))
    @yield('content')
    @else
    @include('layout/frontend-navigation')
    @yield('content')
    @include('layout/frontend-footer')
    @endif

</body>

<!-- Vendor JS Files -->
<script src="{{asset('/vendor/aos/aos.js')}}"></script>
<script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('/vendor/glightbox/js/glightbox.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('/js/main.js')}}"></script>

</html>
