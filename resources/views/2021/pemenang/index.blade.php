@extends($tahun.'.layout.app',['title'=>'Pemenang DTIK Fest 2021'])

@section('content')

{{-- <div class=" vh-100 w-100 d-flex align-items-center justify-content-center">
    <div class=" mt-5"></div>
    {{dd($kategoriPemenangMhs[0]->kategoriPemenang)}}

<br><br>
@foreach ($kategoriPemenangTim as $value)
<div class="text-center m-5">
    {{$value->kategoriPemenang->nama_kategori_pemenang}}<br>
    <a href={{ asset('/pemenang/tim/'.strtolower($value->id_kategori_pemenang))}}>link
        detail</a>
</div>
@endforeach
</div> --}}

<section class="kategori-pemenang">
    <div class="top-tittle" data-aos="fade-up" data-aos-easing="ease-in-out">
        <h2>Kategori Pemenang</h2>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($kategoriPemenangMhs as $value)
            <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                <a href={{ asset('/pemenang/personal/'.strtolower($value->id_kategori_pemenang))}}>
                    <div class="item-group">
                        <h3>{{$value->kategoriPemenang->nama_kategori_pemenang}}</h3>
                        <h4>Kategori Individu</h4>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach ($kategoriPemenangTim as $value)
            <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                <a href={{ asset('/pemenang/tim/'.strtolower($value->id_kategori_pemenang))}}>
                    <div class="item-group">
                        <h3>{{$value->kategoriPemenang->nama_kategori_pemenang}}</h3>
                        <h4>Kategori Tim</h4>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="show" data-aos="fade-up" onclick="showContent()">
            <i class='bx bxs-chevron-down-circle' style='color:#2d75bb'></i>
        </div>

        <div class="hidden-content">
            <div class="row">
                <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                    <a href="{{asset('/pemenang/peringkat')}}">
                        <div class="item-group">
                            <h3>Top Softskill</h3>
                            <h4>Individual Award</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="hide" data-aos="fade-up" onclick="hideContent()">
            <i class='bx bxs-chevron-up-circle' style='color:#2d75bb'></i>
        </div>
    </div>
</section>
<!-- End Kategori Pemenang -->

<script>
    var content = document.getElementsByClassName("hidden-content");
    var showbtn = document.getElementsByClassName("show");
    var hidebtn = document.getElementsByClassName("hide");

    function showContent() {
        content[0].style.display = "block";
        showbtn[0].style.display = "none";
        hidebtn[0].style.display = "block";

        console.log("success");
    }

    function hideContent() {
        content[0].style.display = "none";
        showbtn[0].style.display = "block";
        hidebtn[0].style.display = "none";
    }

</script>
@endsection
