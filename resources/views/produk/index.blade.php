@extends('layout.app',['title'=>'Produk DTIK Fest 2021'])

@section('content')

<!-- ======= Mobile Section ======= -->
<section id="product">
    <div class="top-tittle" data-aos="fade-right" data-aos-easing="ease-in-out">
        <h2>Mobile App</h2>
    </div>
    <div class="container">
        <div class="row">

            @foreach ($tim as $tim)
            <div class="col-lg-4 col-md-6 app" data-aos="zoom-in">
                <a href="/detailProdukTim/{{$tim->id_tim}}">
                    <div class="product-box">
                        <img src="/img/App.png" alt="">
                        <div class="desc">
                            <h3>{{$tim->produk->nama_produk}}</h3>
                            <h4>{{$tim->nama_tim}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>

        <nav aria-label="pagination-nav">
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
        </nav>
    </div>
</section>
<!-- End Mobile -->

@endsection
