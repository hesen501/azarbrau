@extends('front/layout/master')
@section('content')
    <!--Home Start-->
    <section id="page-home">
        <img src="front/img/products-img.png" alt="">
        <div class="page-bg"></div>
        <div class="container">
            <div class="row">
                <h1 class="page-head-text">
                    XƏBƏRLƏR
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
                    Xəbərlər
                </li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb-->
    <!--Page Start-->
    <section id="news-page">
        <div class="container">
            <div class="row">
                <div class="main-card">
                    <div class="col-6">
                        <img src="front/img/news.png" alt="">
                    </div>
                    <div class="col-5">
                        <h3 class="main-head">
                            Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası
                        </h3>
                        <p class="date">
                            17.08.2022
                        </p>
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. A rhoncus turpis phasellus nec. Sed
                            elementum ut lobortis cras cursus quisque. Lobortis lobortis dolor facilisi purus dui magna
                            libero tortor vitae. Purus nisl tincidunt molestie non. At in pellentesque arcu, congue
                            pharetra velit. Quis malesuada montes, commodo in.
                        </p>
                        <button class="btn">
                            Ətraflı
                        </button>
                    </div>
                </div>
                <div class="news-card item">
                    <a href="#">
                        <img src="front/img/news.png" alt="">
                        <div class="news-text">
                            <h3 class="news-head">
                                Abrau Winonah De -
                                alkoqolsuz sərinləşdirici
                                içkilərin yeni kolleksiyası
                            </h3>
                            <a href="#" class="detail">
                                Ətraflı
                            </a>
                            <p class="news-date">
                                17.08.2022
                            </p>
                        </div>
                    </a>
                </div>
                <div class="news-card item">
                    <a href="#">
                        <img src="front/img/news.png" alt="">
                        <div class="news-text">
                            <h3 class="news-head">
                                Abrau Winonah De -
                                alkoqolsuz sərinləşdirici
                                içkilərin yeni kolleksiyası
                            </h3>
                            <a href="#" class="detail">
                                Ətraflı
                            </a>
                            <p class="news-date">
                                17.08.2022
                            </p>
                        </div>
                    </a>
                </div>
                <div class="news-card item">
                    <a href="#">
                        <img src="front/img/news.png" alt="">
                        <div class="news-text">
                            <h3 class="news-head">
                                Abrau Winonah De -
                                alkoqolsuz sərinləşdirici
                                içkilərin yeni kolleksiyası
                            </h3>
                            <a href="#" class="detail">
                                Ətraflı
                            </a>
                            <p class="news-date">
                                17.08.2022
                            </p>
                        </div>
                    </a>
                </div>
                <div class="news-card item">
                    <a href="#">
                        <img src="front/img/news.png" alt="">
                        <div class="news-text">
                            <h3 class="news-head">
                                Abrau Winonah De -
                                alkoqolsuz sərinləşdirici
                                içkilərin yeni kolleksiyası
                            </h3>
                            <a href="#" class="detail">
                                Ətraflı
                            </a>
                            <p class="news-date">
                                17.08.2022
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Page End-->
    @endsection