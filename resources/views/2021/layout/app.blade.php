<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$title ?? 'DTIK Fest'}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="icon" type="image/png" href="{{asset('aset-'.$tahun.'/img/DTIK Fest.png')}}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('aset-'.$tahun.'/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('aset-'.$tahun.'/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('aset-'.$tahun.'/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('aset-'.$tahun.'/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('aset-'.$tahun.'/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('aset-'.$tahun.'/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('aset-'.$tahun.'/css/style.css')}}" rel="stylesheet">
    {{-- @yield('head') --}}
</head>

<body>

    @if (request()->is('admin/*'))
    @yield('content')
    @else
    @include($tahun.'/layout/frontend-navigation')
    @yield('content')
    @include($tahun.'/layout/frontend-footer')
    @endif

    <div class="preloader">
        <div class="ring">
            <div class="ring-img">
                <img src="{{asset('aset-'.$tahun.'/img/DTIK Fest.png')}}" alt="">
            </div>
            <span></span>
        </div>
    </div>

    <script src="//code.tidio.co/0emm6blrukygdj0stmu77wtqbnt7u6dh.js" async></script>
</body>

<!-- Vendor JS Files -->
<script src="{{asset('aset-'.$tahun.'/vendor/aos/aos.js')}}"></script>
<script src="{{asset('aset-'.$tahun.'/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('aset-'.$tahun.'/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('aset-'.$tahun.'/vendor/glightbox/js/glightbox.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('aset-'.$tahun.'/js/main.js')}}"></script>
<script>
    var preloader = document.querySelector(".preloader");
    window.addEventListener("load", vanish);

    function vanish() {
        preloader.classList.add("dissapear");
    }

</script>

</html>
