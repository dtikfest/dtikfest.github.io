@extends('layout.app',['title'=>'Pemenang DTIK Fest 2021'])

@section('content')

<!-- Kategori Pemenang -->
<section class="kategori-pemenang">
    <div class="top-tittle" data-aos="fade-up" data-aos-easing="ease-in-out">
        <h2>Kategori Pemenang</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                <a href="{{asset('/pemenang/peringkat')}}">
                    <div class="item-group">
                            <h3>Top Softskill</h3>
                            <h4>Individual Award</h4>
                    </div>
                </a>
            </div>
            <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                <div class="item-group">
                    <a href="#">
                        <h3>Top Softskill</h3>
                        <h4>Individual Award</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                <div class="item-group">
                    <a href="#">
                        <h3>Top Softskill</h3>
                        <h4>Individual Award</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                <div class="item-group">
                    <a href="#">
                        <h3>Top Softskill</h3>
                        <h4>Individual Award</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                <div class="item-group">
                    <a href="#">
                        <h3>Top Softskill</h3>
                        <h4>Individual Award</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                <div class="item-group">
                    <a href="#">
                        <h3>Top Softskill</h3>
                        <h4>Individual Award</h4>
                    </a>
                </div>
            </div>
        </div>

        <div class="show" data-aos="fade-up" onclick="showContent()">
            <i class='bx bxs-chevron-down-circle' style='color:#2d75bb'  ></i>
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
                <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                    <div class="item-group">
                        <a href="#">
                            <h3>Top Softskill</h3>
                            <h4>Individual Award</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                    <div class="item-group">
                        <a href="#">
                            <h3>Top Softskill</h3>
                            <h4>Individual Award</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                    <div class="item-group">
                        <a href="#">
                            <h3>Top Softskill</h3>
                            <h4>Individual Award</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                    <div class="item-group">
                        <a href="#">
                            <h3>Top Softskill</h3>
                            <h4>Individual Award</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 item" data-aos="fade-up" data-aos-delay="50">
                    <div class="item-group">
                        <a href="#">
                            <h3>Top Softskill</h3>
                            <h4>Individual Award</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hide" data-aos="fade-up" onclick="hideContent()">
            <i class='bx bxs-chevron-up-circle' style='color:#2d75bb'  ></i>
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
