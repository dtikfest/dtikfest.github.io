@extends($tahun.'.layout.app',['title'=>'Produk DTIK Fest 2021'])

@section('content')

<!-- ======= Mobile Section ======= -->
<section id="product">
    <div class="top-tittle" data-aos="fade-right" data-aos-easing="ease-in-out">
        <h2>Mobile App</h2>
    </div>
    <div class="container">
        <div class="row">
            {{-- {{dd($kategori_produk->produk[0]->tim->anggotaTim[0]->nrp)}} --}}
            {{-- atribut produk itu dari method --}}
            @forelse ($kategori_produk->produk as $katPro)
            <div class="col-lg-4 col-md-6 app" data-aos="zoom-in">
                <a href="{{asset($tahun.'/detailProdukTim/'.$katPro->tim->id_tim)}}">
                    <div class="product-box">
                        <img src="{{asset('aset-'.$tahun.'/img/products/'.$katPro->foto_produk1)}}" alt="">
                        <div class="desc">
                            <h3>{{$katPro->nama_produk}}</h3>
                            <h4>{{$katPro->tim->nama_tim}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class=" vh-100">
                <div class=" alert alert-info mt-5 text-center">
                    Belum ada Post.
                </div>
            </div>
            @endforelse
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
<!-- End Mobile -->

@endsection
