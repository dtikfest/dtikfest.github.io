@extends('layout.app',['title'=>'Detail Produk DTIK Fest 2021'])

@section('content')

<!-- ======= Detail Produk Section ======= -->
<section id="detail-product">
    <div class="top-tittle" data-aos="fade-right" data-aos-easing="ease-in-out">
        <h2>Kategori Produk</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 detail">
                <div class="image-gallery" data-aos="zoom-in">
                    <?php $i=1;?>
                    @while ($tim->produk->{'foto_produk'.$i} != null)
                    <div class="mySlides">
                        <img src="{{asset('/img/products/'.$tim->produk->{'foto_produk'.$i})}}">
                        <?php $i++;?>
                    </div>
                    @endwhile

                    <a class=" prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                    <div class="row">
                        <?php $i=1;?>
                        @while ($tim->produk->{'foto_produk'.$i} != null)
                        <div class="column">
                            <img class="demo cursor" src="{{asset('/img/products/'.$tim->produk->{'foto_produk'.$i})}}"
                                onclick="currentSlide($i)">
                            <?php $i++;?>
                        </div>
                        @endwhile

                    </div>
                </div>
            </div>
            <div class="col-lg-6 detail" data-aos="fade-up">
                <div class="row">
                    <div id="button-group">
                        <a class="btn active" onclick="myFunction(1)">Deskripsi</a>
                        <a class="btn" onclick="myFunction(2)">Tim</a>
                        <a class="btn" onclick="myFunction(3)">Kontak</a>
                    </div>
                </div>
                <div class="row">
                    <div class="content">
                        <div class="content-item">
                            <h1>{{$tim->produk->nama_produk}}</h1>
                            <p>{{$tim->produk->deskripsi_produk}}</p>
                        </div>
                        <div class="content-item" style="display: none;">
                            <h1>{{$tim->nama_tim}}</h1>
                            <ul>
                                @foreach ($tim->anggotaTim as $index => $anggota)
                                <li>{{$index+1}}. {{$anggota->nama_mahasiswa }} ({{$anggota->nrp}})</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="content-item" style="display: none;">
                            {{-- {{dd($tim)}} --}}
                            <h3><i class='bx bxs-map'></i>{{$tim->alamat}}</h3>
                            <h3><i class='bx bxs-contact'></i>{{$tim->no_telp}}</h3>
                            <h3><i class='bx bxs-envelope'></i>{{$tim->email}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="detail-button">
                        <a href="#" class="btn-get-started link">Demo Produk</a>
                        <a href="https://www.youtube.com/embed/QgoD1uAn0x8" class="btn-get-started video-lightbox"><i
                                class='bx bx-play'></i> Video</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End Mobile -->


<script>
    /*Image Slideshow*/
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    /*End Image Slideshow*/

    /*Active button*/
    function myFunction(e) {
        var trigger = document.getElementsByClassName("btn");
        if (document.querySelector('#button-group a.active') !== null) {
            document.querySelector('#button-group a.active').classList.remove('active');
        }
        trigger[e - 1].className += " active";

        var content = document.getElementsByClassName("content-item");
        for (var i = 0; i < content.length; i++) {
            content[i].style.display = "none";
        }
        content[e - 1].style.display = "block";
    }
    /*End Active button*/

</script>
@endsection
