@extends($tahun.'.layout.app',['title'=>'Arsip DTIK Fest 2021'])

@section('content')

<!-- Arsip -->
<section class="arsip">
    <div class="top-tittle" data-aos="fade-up" data-aos-easing="ease-in-out">
        <h2>Arsip</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 arsip-box" data-aos="fade-up">
                <a href={{asset('arsip/2022')}}>
                    <div class="row align-items-center">
                        <div class="col-1 icon">
                            <img src="{{asset('aset-'.$tahun.'/img/DTIK Fest.png')}}" alt="">
                        </div>
                        <div class="col text">
                            <h4>DTIK Fest 2021</h4>
                            <p>Politeknik Negeri Surabaya</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-12 arsip-box" data-aos="fade-up">
                <a href="#">
                    <div class="row align-items-center">
                        <div class="col-1 icon">
                            <img src="{{asset('aset-'.$tahun.'/img/DTIK Fest.png')}}" alt="">
                        </div>
                        <div class="col text">
                            <h4>Coming Soon</h4>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- End Arsip -->

    @endsection
