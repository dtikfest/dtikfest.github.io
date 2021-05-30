@extends($tahun.'.layout.app',['title'=>'Peringkat Pemenang DTIK Fest 2021'])

@section('content')

<!-- Peringkat Pemenang -->
<section id="peringkat">
    <div class="top-tittle" data-aos="fade-right" data-aos-easing="ease-in-out">
        <h2>Top Softskill</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 app" data-aos="zoom-in">
                <a href="#">
                    <div class="peringkat-box">
                        <img src="/public/img/products/dolankuy1.png" alt="">
                        <div class="desc">
                            <h3>Nama Produk</h3>
                            <h4>Nama Tim</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 app" data-aos="zoom-in">
                <a href="#">
                    <div class="peringkat-box">
                        <img src="/public/img/products/dolankuy1.png" alt="">
                        <div class="desc">
                            <h3>Nama Produk</h3>
                            <h4>Nama Tim</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 app" data-aos="zoom-in">
                <a href="#">
                    <div class="peringkat-box">
                        <img src="/public/img/products/dolankuy1.png" alt="">
                        <div class="desc">
                            <h3>Nama Produk</h3>
                            <h4>Nama Tim</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 app" data-aos="zoom-in">
                <a href="#">
                    <div class="peringkat-box">
                        <img src="/public/img/products/dolankuy1.png" alt="">
                        <div class="desc">
                            <h3>Nama Produk</h3>
                            <h4>Nama Tim</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 app" data-aos="zoom-in">
                <a href="#">
                    <div class="peringkat-box">
                        <img src="/public/img/products/dolankuy1.png" alt="">
                        <div class="desc">
                            <h3>Nama Produk</h3>
                            <h4>Nama Tim</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        {{-- <nav aria-label="pagination-nav">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav> --}}
    </div>
</section>
<!-- End Peringkat Pemenang -->

@endsection
