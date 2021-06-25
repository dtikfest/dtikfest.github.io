@extends($tahun.'.layout.app',['title'=>'DTIK Fest 2021'])

@section('content')
<!-- ======= Beranda Section ======= -->
<section id="beranda">

    <div class="container">
        <div class="row">
            <div class="beranda-img" data-aos="zoom-in">
                <img src="{{asset('aset-'.$tahun.'/img/DTIK Fest.png')}}" class="img-fluid" alt="">
            </div>
            <div class="justify-content-center" data-aos="fade-up">
                <div>
                    <h1>VIRTUAL SOFTWARE EXPO</h1>
                    <div class="text-center">
                        <a href="https://dtik-fest.com/" target="blank" class="btn-get-started exibition scrollto"><i
                                class='bx bx-play'></i> VISIT
                            EXHIBITION</a>
                        <a href="#trailer" class="btn-get-started trailer scrollto">TRAILER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Beranda -->

<!-- ======= Trailer Section ======= -->
<section id="trailer">
    <div class="container">
        <div class="row">
            <div class="teaser d-flex flex-column justify-content-center align-items-center mt-3" data-aos="zoom-in-up">
                <h1 class="text-center mb-0"><b>TRAILER</b></h1>
                <h4 class="text-center mb-4">D'TIK FEST 2021</h4>
                <div class="embed-youtube">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/QgoD1uAn0x8" allow="gyroscope;"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Trailer -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h1>Apa itu
                    <b>Dtik Fest</b>
                </h1>
            </div>
            <div class="row">
                <div class="col-lg-4 bg-laptop-img" data-aos="zoom-in">

                </div>
                <div class="col-lg-8 d-flex flex-column justify-contents-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="content pt-4 pt-lg-0">
                        <p>
                            <img src="{{asset('aset-'.$tahun.'/img/D2.png')}}" alt=""> DTIK Fest adalah kegiatan yang
                            diselenggarakan
                            secara
                            virtual oleh Departemen Teknik Informatika dan Komputer (ITCE) sebagai sarana apresiasi
                            kepada mahasiswa yang telah menyalurkan
                            ide kreatifnya secara nyata ke dalam sebuah produk teknologi inovatif dan kompetitif
                            sehingga mampu memperlihatkan ke ranah luar bahwa mahasiswa Politeknik Elektronika Negeri
                            Surabaya (PENS) dapat mengembangkan potensinya
                            dan menghasilkan produk berdaya saing tinggi di era Industri 4.0, serta tetap berprestasi di
                            tengah pandemi COVID-19.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Galeri Section ======= -->
    <section id="galeri" class="galeri">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h1>Galeri</h1>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet enim in nisl tincidunt
                    tristique. Donec molestie ligula at egestas venenatis. Fusce lacus sem, sagittis sed viverra quis,
                    gravida vel ligula. Vivamus imperdiet
                    malesuada vestibulum. Nam feugiat eu nulla sit amet interdum. Mauris sit amet dui id justo euismod
                    auctor a ac odio. Suspendisse condimentum enim eu dignissim mattis.
                </p>-->
            </div>
            <div class="gallery-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($galeri as $gal)
                    <div class="swiper-slide">
                        <div class="gallery">
                            <img src="{{asset('/arsip-galeri/'.$gal->foto)}}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class=" text-center " data-aos="fade-up">
            <a href={{asset('/galeri/2020')}} class="link-light bx-burst-hover">Selengkapnya</a>
        </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h1>Testimoni</h1>
                <p>Apa Kata Mereka?</p>
            </div>

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($testimoni as $testi)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                {{ $testi->deskripsi_testimoni}}
                            </p>
                            <img src="{{asset('aset-'.$tahun.'/img/mahasiswa/'. $testi->mahasiswa->foto)}}"
                                class="testimonial-img" alt="" style="height: 78px; width:78px">
                            <h3>{{$testi->mahasiswa->nama_mahasiswa}}</h3>
                            <h4>{{$testi->peran}}</h4>
                            <div class="icon">
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Kegiatan Section ======= -->
    <section id="kegiatan" class="kegiatan">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h1>Kegiatan di
                    <b>Dtik Fest</b>
                </h1>
                <p>
                    DTIK Fest adalah kegiatan yang diselenggarakan secara virtual oleh Departemen Teknik Informatika dan
                    Komputer (ITCE) sebagai sarana apresiasi kepada mahasiswa yang telah menyalurkan ide kreatifnya
                    secara nyata ke dalam sebuah produk teknologi inovatif
                    dan kompetitif sehingga mampu memperlihatkan ke ranah luar bahwa mahasiswa Politeknik Elektronika
                    Negeri Surabaya (PENS) dapat mengembangkan potensinya dan menghasilkan produk berdaya saing tinggi
                    di era Industri 4.0, serta tetap
                    berprestasi di tengah pandemi COVID-19.
                </p>
            </div>

            <div class="flow-group" data-aos="fade-up">
                <h1 class="btn-get-started master-flow">19 Januari 2021</h1>
            </div>
            <ul class="timeline" data-aos="fade-up">
                <li data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-image"></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>2009-2011</h4> --}}
                            <h4 class="subheading">Sambutan Pihak yang Berkontribusi</h4>
                        </div>
                        {{-- Gambar Section Kegiatan 01 --}}
                        <div class="timeline-body">
                            <img src="{{asset('aset-'.$tahun.'/img/kegiatan/01 sambutan-grid.jpeg')}}" alt="">
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted" data-aos="fade-up">
                    <div class="timeline-image"></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>March 2011</h4> --}}
                            <h4 class="subheading">Pameran dan Presentasi Produk Inovatif</h4>
                        </div>
                        {{-- Gambar Section Kegiatan 02 --}}
                        <div class="timeline-body">
                            <img src="{{asset('aset-'.$tahun.'/img/kegiatan/02 pameran presentasi.jpeg')}}" alt="">
                        </div>
                    </div>
                </li>
                <li data-aos="fade-up">
                    <div class="timeline-image"></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>December 2015</h4> --}}
                            <h4 class="subheading">Awarding Peserta DTIK Fest 2021</h4>
                        </div>
                        {{-- Gambar Section Kegiatan 03 --}}
                        <div class="timeline-body">
                            <img src="{{asset('aset-'.$tahun.'/img/kegiatan/03 Awarding.jpeg')}}" alt="">
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted" data-aos="fade-up">
                    <div class="timeline-image"></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>July 2020</h4> --}}
                            <h4 class="subheading">Apresiasi Juri</h4>
                        </div>
                        {{-- Gambar Section Kegiatan 04 --}}
                        <div class="timeline-body">
                            <img src="{{asset('aset-'.$tahun.'/img/kegiatan/04 apresiasi juri.jpeg')}}" alt="">
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Acara Selesai
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Kegiatan Section -->

    <!-- ======= Sponsor Section ======= -->
    <section id="sponsors" class="sponsors">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h1>Sponsor</h1>
                <p>TELAH DIDUKUNG OLEH</p>
            </div>
            <div class="row no-gutters sponsors-wrap clearfix wow fadeInUp">
                @foreach ($industri as $ind)
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="sponsor-logo" data-aos="zoom-in">
                        <img src="{{asset('aset-'.$tahun.'/img/sponsors/'.$ind->logo_industri) }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Sponsors Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h1>FAQ</h1>
                <h3>Frequently Asked Questions</h3>
            </div>

            <ul class="faq-list" data-aos="fade-up">
                <ul class="faq-list">
                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apa itu DTIK Fest 2021?<i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Adalah kegiatan yang diselenggarakan secara virtual oleh Departemen Teknik Informatika
                                dan Komputer (ITCE) Politeknik Elektronika Negeri Surabaya, sebagai sarana apresiasi
                                kepada mahasiswa yang telah menyalurkan ide kreatifnya secara nyata ke dalam sebuah
                                produk teknologi inovatif dan kompetitif.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq2">Kapan dan dimana atau
                            bagaimana pelaksanaan DTIK Fest 2021?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                DTIK Fest 2021 diselenggarakan pada hari Selasa, 19 Januari 2021 pukul 08.00 - selesai,
                                secara virtual yang dapat diakses melalui halaman exhibition <a
                                    href="https://dtik-fest.com/" target="blank"><b>DTIK FEST</b></a>.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq3">Siapa yang dapat
                            mengikuti acara DTIK Fest 2021?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                DTIK Fest 2021 terbuka untuk umum.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq4">Siapa saja yang menjadi
                            exhibitor pada acara DTIK Fest 2021?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Exhibitor DTIK Fest 2021 adalah mahasiswa semester 5 Jurusan Teknik Informatika dan
                                Komputer Politeknik Elektronika Negeri Surabaya.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq5">Apa yang akan kami
                            dapatkan dengan mengikuti acara DTIK Fest 2021?<i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Anda akan mendapatkan berbagai informasi produk atau karya inovatif dari Jurusan Teknik
                                Informatika dan Komputer Politeknik Elektronika Negeri Surabaya. Produk-produk yang
                                dipamerkan adalah hasil karya inovatif yang dapat bersaing di dunia Industri, yang dapat
                                Anda demokan melalui halaman utama <a href="#"><b>DTIK FEST</b></a>. Selain itu, setiap
                                pengunjung memiliki kesempatan untuk mendapatkan doorprize yang telah disediakan.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq6">Kapan waktu pendaftaran
                            dibuka?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Pendaftaran visitor DTIK Fest 2021 masih dibuka hingga H-1 acara dilaksanakan.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq7">Bagaimana cara
                            pendaftaran untuk menjadi visitor DTIK Fest 2021?<i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Akses halaman exhibition <a href="https://dtik-fest.com/" target="blank"><b>DTIK
                                        FEST</b></a>. Lakukan
                                registrasi untuk membuat akun virtual exhibition. Ikuti arahan selanjutnya dari panitia
                                terkait.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq8">Bagaimana cara mengikuti
                            DTIK Fest 2021?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq8" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Login menggunakan akun yang telah diregistrasi sebelumnya pada halaman exhibition <a
                                    href="https://dtik-fest.com/" target="blank"><b>DTIK FEST</b></a>.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq9">Apakah halaman virtual
                            exhibition dapat diakses melalui Android?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq9" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dapat diakses menggunakan Chrome tampilan desktop, namun lebih disarankan menggunakan
                                PC.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq10">Apakah saat hari
                            pelaksanaan acara, visitor dapat langsung masuk ke halaman virtual exhibition atau menunggu
                            arahan dari panitia?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq10" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Visitor dapat langsung mengakses halaman virtual exhibition apabila sudah memahami cara
                                penggunaannya. Bila belum, dapat menyaksikan simulasi di live streaming <a
                                    href="https://www.youtube.com/channel/UCmNTGcvJd4732qboYY8vf7A/featured"
                                    target="blank"><b>Youtube
                                        DTIK Fest 2021</b></a>.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq11">Apakah acara ini
                            mendapatkan E-Sertifikat?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq11" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Visitor DTIK Fest 2021 tidak mendapatkan E-Sertifikat, namun visitor mendapatkan
                                kesempatan untuk mendapatkan doorprize.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq12">Saya memiliki pertanyaan
                            yang belum terjawab mengenai DTIK Fest 2021<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq12" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dapat langsung menghubungi CP tertera, atau kontak melalui email ke
                                <b>dtikfest@pens.ac.id</b>
                            </p>
                        </div>
                    </li>
                </ul>

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

</main>
<!-- End #main -->

@endsection
