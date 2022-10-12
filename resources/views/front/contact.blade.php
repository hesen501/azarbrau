@extends('front/layout/master')
@section('content')
    <!--Home Start-->
    <section id="page-home">
        <img src="front/img/products-img.png" alt="">
        <div class="page-bg"></div>
        <div class="container">
            <div class="row">
                <h1 class="page-head-text">
                    ƏLAQƏ
                </h1>
                <p class="page-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus egestas suspendisse porttitor elit
                    sed volutpat.
                </p>
                <a class="down-img" href="javascript:void(0)">
                    <img src="front/img/down-arrow.svg" alt="">
                </a>
            </div>
        </div>
    </section>
    <!--Home End-->
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
                    Əlaqə
                </li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="contact">
                    <div class="col-4">
                        <h3 class="contact-head">
                            Ünvan
                        </h3>
                        <p class="contact-text">
                            Port Baku,Neftchilar Avenue 153,
                            Baku Azerbaijan
                        </p>
                    </div>
                    <div class="col-4">
                        <h3 class="contact-head">
                            Telefon
                        </h3>
                        <p class="contact-text">
                            <a href="tel:+944501234567">
                                +944 50 123 45 67
                            </a>
                        </p>
                        <p class="contact-text">
                            <a href="tel:+944501234567">
                                +944 50 123 45 67
                            </a>
                        </p>
                    </div>
                    <div class="col-4">
                        <h3 class="contact-head">
                            e-mail
                        </h3>
                        <p class="contact-text">
                            <a href="mailTo:info@azabrau.az">
                                info@azabrau.az
                            </a>
                        </p>
                    </div>
                </div>
                <form action="#">
                    <input class="contact-input text-input" type="text" placeholder="Adınız">
                    <input class="contact-input text-input" type="text" placeholder="Soyadınız">
                    <input class="contact-input contact-mail" type="text" placeholder="E-mail adresi">
                    <input class="contact-input contact-number" type="text" placeholder="Telefon nömrəsi">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Əlavə qeyd"></textarea>
                    <button class="btn">
                        Göndər
                    </button>
                </form>
            </div>
        </div>
    </section>
    @endsection