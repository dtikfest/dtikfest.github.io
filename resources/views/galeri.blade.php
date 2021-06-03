@extends('layout.app',['title'=>'GALERI DTIK Fest 2021'])

@section('content')

<div class=" mt-5 pt-3" id="gallery-page">
    <div class="container mb-5">
        <h1 class="text-center text-blue font-weight-bold my-5"><b>GALERI DTIKFEST <br> {{$tahun}}</b></h1>


        <div class="row">
            <div class="dropdown mb-3">
                <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Tahun Dokumentasi
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href={{asset("/galeri/2013")}}>2013</a></li>
                    <li><a class="dropdown-item" href={{asset("/galeri/2016")}}>2016</a></li>
                    <li><a class="dropdown-item" href={{asset("/galeri/2017")}}>2017</a></li>
                    <li><a class="dropdown-item" href={{asset("/galeri/2018")}}>2018</a></li>
                    <li><a class="dropdown-item" href={{asset("/galeri/2020")}}>2020</a></li>
                </ul>
            </div>
            {{-- {{ dd($tahun) }} --}}
            {{-- {{ dd($images) }} --}}
            @foreach ($images as $img)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <img src="{{asset($img)}}">
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
