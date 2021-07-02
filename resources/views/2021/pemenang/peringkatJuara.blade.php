@extends($tahun.'.layout.app',['title'=>'Peringkat Pemenang DTIK Fest 2021'])

@section('content')



<!-- Peringkat Pemenang -->
<section id="peringkat">
    <div class="top-tittle" data-aos="fade-right" data-aos-easing="ease-in-out">
        <h2>{{$peringkatJuara[0]->kategoriPemenang->nama_kategori_pemenang}}</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            {{-- {{dd($peringkatJuara[1]->detailJuara->nama_tim)}} --}}
            @if ($jenis=='solo')
            @foreach ($peringkatJuara as $value)
            <div class="col-lg-4 col-md-6 app" data-aos="zoom-in">
                <a href="#">
                    <div class="peringkat-box">
                        {{-- {{dd($value->mhs)}} --}}
                        <img src="{{asset('aset-'.$tahun.'/img/mahasiswa/'.$value->mhs->foto)}}" alt=""
                            style="height:300px">
                        <div class="urutan-peringkat" style="height: 50px; width:50px">1</div>
                        <div class="desc">
                            <h3>{{$value->mhs->nama_mahasiswa}}</h3>
                            {{-- <h4>kelas</h4> --}}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endif

            @if ($jenis=='tim')
            @foreach ($peringkatJuara as $value)
            <div class="col-lg-4 col-md-6 app" data-aos="zoom-in">
                <a href={{asset('/detailProdukTim/'.$value->tim->id_tim)}}>
                    <div class="peringkat-box">
                        <img src={{asset('aset-'.$tahun.'/img/produk/'.$value->id_tim. preg_replace("/[^A-Za-z0-9]/", "", $value->tim->produk->nama_produk).'/produk.png')}}
                            alt="">
                        <div class="urutan-peringkat" style="height: 50px; width:50px">1</div>
                        <div class="desc">
                            <h3>{{$value->tim->produk->nama_produk}}</h3>
                            <h4>Tim {{$value->tim->nama_tim}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endif

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
    </div>
</section>
<!-- End Peringkat Pemenang -->

@endsection
