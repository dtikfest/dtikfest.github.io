@extends('layout.app',['title'=>'FAQ DTIK Fest 2021'])

@section('content')

<div class=" mt-5 pt-5" id="gallery-page">
    <div class="container mb-5">
        <h1 class="text-center text-blue font-weight-bold my-5"><b>GALLERY</b></h1>

        <div class="dropdown mb-3">
            <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-bs-toggle="dropdown" aria-expanded="false">
                Tahun Dokumentasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/galeri/2013">2013</a></li>
                <li><a class="dropdown-item" href="/galeri/2016">2016</a></li>
                <li><a class="dropdown-item" href="/galeri/2017">2017</a></li>
                <li><a class="dropdown-item" href="/galeri/2018">2018</a></li>
                <li><a class="dropdown-item" href="/galeri/2020">2020</a></li>
            </ul>
        </div>

        <div class="row">
            {{-- {{ dd($image) }} --}}
            @foreach ($image as $img)
            <div class="col-lg-4 col-md-6 mb-4">
                <img src="{{$img}}">
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
