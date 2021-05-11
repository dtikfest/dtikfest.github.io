@extends('layout.app',['title'=>'Pemenang DTIK Fest 2021'])

@section('content')
<div class=" vh-100 w-100 d-flex align-items-center justify-content-center">
    <div class=" mt-5"></div>
    <div class=" alert alert-info text-center m-5">
        Halaman FAQ Masih Kosong <br>
        <a href="{{asset('/pemenang/a')}}">Link Peringkat Juara 1 2 3</a>
    </div>
</div>

{{-- <div class=" vh-100 w-100 d-flex align-items-center justify-content-center">
    <div class=" mt-5"></div>
    @forelse ($kategoriPemenang as $value)
    <div class="text-center m-5">
        {{$value->kategoriPemenang->nama_kategori_pemenang}}
<a href="/pemenang"></a>
</div>
@empty
<div class=" alert alert-info text-center m-5">
    Halaman Daftar Pemenang Masih Kosong
    <a href="/pemenang"></a>
</div>
@endforelse
</div> --}}


@endsection
