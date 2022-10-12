@extends('front/layout/master')
@section('content')
    <!--Home Start-->
    <!--Breadcrumb-->
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('home')}}">
                        Ana Səhifə
                    </a>
                </li>
                <span>/</span>
                <li class="breadcrumb-item">
                    <a href="{{route('products')}}">
                        Məhsullar
                    </a>
                </li>
                <span>/</span>
                <li class="breadcrumb-item">
                    Cullen
                </li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb-->
    <!--Product Single Start-->
    <section id="product-single">
        <div class="container">
            <div class="row">
                <div class="product-single">
                    <div class="col-6">
                        <img src="front/img/sharab.png" alt="">
                    </div>
                    <div class="col-6">
                        <div class="about-block">
                            <h2 class="product-name">
                                CULLEN
                            </h2>
                            <p class="product-single-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Urna adipiscing tortor scelerisque auctor egestas viverra.
                            </p>
                            <span class="product-border"></span>
                        </div>
                        <div class="about-block">
                            <h3 class="product-about-head">
                                Mənşəyi
                            </h3>
                            <p class="product-single-text">
                                Lorem ipsum
                            </p>
                            <span class="product-border"></span>
                        </div>
                        <div class="about-block">
                            <h3 class="product-about-head">
                                Alkoqol dərəcəsi
                            </h3>
                            <p class="product-single-text">
                                15%
                            </p>
                            <span class="product-border"></span>
                        </div>
                        <div class="about-block">
                            <h3 class="product-about-head">
                                İstehsal ili
                            </h3>
                            <p class="product-single-text">
                                1985
                            </p>
                            <span class="product-border"></span>
                        </div>
                        <div class="about-block">
                            <h3 class="product-about-head">
                                Məhsul haqqında
                            </h3>
                            <p class="product-single-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna adipiscing tortor
                                scelerisque auctor egestas viverra. Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.Urna adipiscing tortor scelerisque auctor egestas viverra.
                            </p>
                            <form action="" method="get">
                                <button class="btn">
                                    Sifariş ver
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="texture-5">
                        <img src="front/img/texture-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product Single End-->
    <!--Product About start-->
    <section id="product-about">
        <div class="container">
            <div class="row">
                <div class="product-about-block">
                    <div class="col-3">
                        <img src="front/img/grape.svg" alt="">
                        <h4 class="product_about_head">
                            Tərkibi
                        </h4>
                        <p class="product_about_text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Urna adipiscing tortor
                            scelerisque auctor egestas viverra.
                        </p>
                    </div>
                    <div class="col-3">
                        <img src="front/img/pro-2.svg" alt="">
                        <h4 class="product_about_head">
                            Uygunluq
                        </h4>
                        <p class="product_about_text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Urna adipiscing tortor
                            scelerisque auctor egestas viverra.
                        </p>
                    </div>
                    <div class="col-3">
                        <img src="front/img/pro-3.svg" alt="">
                        <h4 class="product_about_head">
                            Temperatur
                        </h4>
                        <p class="product_about_text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Urna adipiscing tortor
                            scelerisque auctor egestas viverra.
                        </p>
                    </div>
                    <div class="col-3">
                        <img src="front/img/pro-4.svg" alt="">
                        <h4 class="product_about_head">
                            Saxlama forması
                        </h4>
                        <p class="product_about_text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Urna adipiscing tortor
                            scelerisque auctor egestas viverra.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product About End-->
    <!--Products Start-->
    <section id="products">
        <div class="container">
            <div class="row">
                <h2 class="page-head">
                    Digər Məhsullar
                </h2>
            </div>
        </div>
        <div class="owl-carousel owl-theme product-slider">
            <div class="item">
                <div class="bg"></div>
                <img src="front/img/sharab.png" alt="">
                <div class="product-text">
                    <h4 class="product-head">
                        Gücləndirilmiş şərab
                        “Ağdam Ağ Şərab”
                    </h4>
                    <p class="product-body">
                        Çeşid: 100% Qırmızı spirtli içkilər
                        Spirt: 19%
                    </p>
                    <button class="btn">
                        Ətraflı
                    </button>
                </div>
            </div>
        </div>
        <div class="texture-6">
            <img src="front/img/texture-6.png" alt="">
        </div>
    </section>
    <!--Products End-->
    @endsection