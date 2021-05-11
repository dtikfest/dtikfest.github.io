<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <a href="{{asset('/')}}"><img src="{{asset('/img/logo.png')}}" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li class="dropdown">
                    <a class="nav-link scrollto active" href="#">
                        <span>Beranda</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a class="nav-link scrollto" href="{{ asset('/#about')}}">Tentang</a></li>
                        <li><a class="nav-link scrollto" href="{{ asset('/#galeri')}}">Galeri</a></li>
                        <li><a class="nav-link scrollto" href="{{ asset('/#testimonials')}}">Testimoni</a></li>
                        <li><a class="nav-link scrollto" href="{{ asset('/#kegiatan')}}">Kegiatan</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Produk</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach (session()->get('kategoriProduk') as $katPro)
                        <li>
                            <a class="nav-link scrollto"
                                href="{{asset('/produk/'.$katPro->id_kategori)}} ">{{$katPro->kategori->nama_kategori}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li><a class="nav-link scrollto " href="{{asset('/pemenang')}}">Pemenang</a></li>
                <li><a class="nav-link scrollto" href="{{asset('/arsip')}}">Arsip</a></li>
                <li><a class="nav-link scrollto " href="{{asset('/faq')}}">FAQ</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <div class="header-social-links d-flex align-items-center">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="youtube"><i class="bi bi-youtube"></i></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>

    </div>
</header>
<!-- End Header -->
