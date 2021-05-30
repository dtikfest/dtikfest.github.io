<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <a href={{$tahun}}><img src="{{asset('aset-'.$tahun.'/img/logo.png')}}" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li class="dropdown">
                    <a class="nav-link scrollto active" href="#">
                        <span>Beranda</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a class="nav-link scrollto" href="/#about">Tentang</a></li>
                        <li><a class="nav-link scrollto" href="/#galeri">Galeri</a></li>
                        <li><a class="nav-link scrollto" href="/#testimonials">Testimoni</a></li>
                        <li><a class="nav-link scrollto" href="/#kegiatan">Kegiatan</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Produk</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach (session()->get('kategoriProduk') as $katPro)
                        <li>
                            <a class="nav-link scrollto"
                                href={{asset($tahun."/produk/".$katPro->id_kategori)}}>{{$katPro->kategori->nama_kategori}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li><a class="nav-link scrollto " href={{asset($tahun."/pemenang")}}>Pemenang</a></li>
                <li><a class="nav-link scrollto" href={{asset($tahun."/arsip")}}>Arsip</a></li>
                <li><a class="nav-link scrollto " href={{asset($tahun."/#faq")}}>FAQ</a></li>
                {{-- <li><a class="nav-link scrollto " href="public/dtikfes2021-old/index.html">DTIK Fest 21(Old)</a> --}}
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <div class="header-social-links d-flex align-items-center">
            <a href="https://www.facebook.com/dtik.fest" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.youtube.com/channel/UCmNTGcvJd4732qboYY8vf7A/featured" class="youtube"><i
                    class="bi bi-youtube"></i></i></a>
            <a href="https://www.instagram.com/dtik.fest/" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>

    </div>
</header>
<!-- End Header -->
