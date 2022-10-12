@extends('front/layout/master')
@section('content')
    <!--Home Start-->
    <section id="page-home">
        <img src="front/img/products-img.png" alt="">
        <div class="page-bg"></div>
        <div class="container">
            <div class="row">
                <h1 class="page-head-text">
                    SATIŞ NÖQTƏLƏRİ
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
                    Satış Nöqtələri
                </li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb-->
    <!--Maps Start-->
    <section id="maps">
        <div class="texture-7">
            <img src="front/img/texture-7.png" alt="">
        </div>
        <div class="texture-8">
            <img src="front/img/texture-8.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <h2 class="page-head">
                    Sizə ən yaxın mağazanı seçin
                </h2>
                <div class="maps">
                    <div class="col-4">
                        <div class="locations">
                            <div class="location-card" data-id="1">
                                <h4 class="loc-head">
                                    AzAbrau şərab evi 1
                                </h4>
                                <p class="loc-text"> 
                                    K. Rəhimov küç. 19 Bakı ş. Azərbaycan
                                </p>
                                <a class="loc-text" href="tel:+994514586247">
                                    +994 51 458 62 47
                                </a>
                                <a class="loc-text" href="tel:+994514586247">
                                    +994 51 458 62 47
                                </a>
                                <a class="loc-btn" href="javaScript:void(0)">
                                    Xəritədə bax
                                </a>
                            </div>
                            <div class="location-card" data-id="2">
                                <h4 class="loc-head">
                                    AzAbrau şərab evi 1
                                </h4>
                                <p class="loc-text"> 
                                    K. Rəhimov küç. 19 Bakı ş. Azərbaycan
                                </p>
                                <a class="loc-text" href="tel:+994514586247">
                                    +994 51 458 62 47
                                </a>
                                <a class="loc-text" href="tel:+994514586247">
                                    +994 51 458 62 47
                                </a>
                                <a class="loc-btn" href="javaScript:void(0)">
                                    Xəritədə bax
                                </a>
                            </div>
                            <div class="location-card" data-id="3">
                                <h4 class="loc-head">
                                    AzAbrau şərab evi 1
                                </h4>
                                <p class="loc-text"> 
                                    K. Rəhimov küç. 19 Bakı ş. Azərbaycan
                                </p>
                                <a class="loc-text" href="tel:+994514586247">
                                    +994 51 458 62 47
                                </a>
                                <a class="loc-text" href="tel:+994514586247">
                                    +994 51 458 62 47
                                </a>
                                <a class="loc-btn" href="javaScript:void(0)">
                                    Xəritədə bax
                                </a>
                            </div>
                            <div class="location-card" data-id="4">
                                <h4 class="loc-head">
                                    AzAbrau şərab evi 1
                                </h4>
                                <p class="loc-text"> 
                                    K. Rəhimov küç. 19 Bakı ş. Azərbaycan
                                </p>
                                <a class="loc-text" href="tel:+994514586247">
                                    +994 51 458 62 47
                                </a>
                                <a class="loc-text" href="tel:+994514586247">
                                    +994 51 458 62 47
                                </a>
                                <a class="loc-btn" href="javaScript:void(0)">
                                    Xəritədə bax
                                </a>
                            </div>
                            <div class="location-card" data-id="5">
                                <h4 class="loc-head">
                                    AzAbrau şərab evi 1
                                </h4>
                                <p class="loc-text"> 
                                    K. Rəhimov küç. 19 Bakı ş. Azərbaycan
                                </p>
                                <a class="loc-text" href="tel:+994514586247">
                                    +994 51 458 62 47
                                </a>
                                <a class="loc-text" href="tel:+994514586247">
                                    +994 51 458 62 47
                                </a>
                                <a class="loc-btn" href="javaScript:void(0)">
                                    Xəritədə bax
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="maps-iframes">
                            <iframe style="display: block;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24299.165344529018!2d49.9081197!3d40.4222368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403062b925a4172f%3A0x2f12045b9d07b467!2s%C5%9Eefa%20Stadyumu!5e0!3m2!1str!2s!4v1664343197348!5m2!1str!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <iframe style="display: none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24299.165344529018!2d49.9081197!3d40.4222368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4030620968b5a159%3A0xae9146e7969a73ac!2sSabunchu%20Hospital!5e0!3m2!1str!2s!4v1664343216646!5m2!1str!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <iframe style="display: none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24299.165344529018!2d49.9081197!3d40.4222368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40306247891484fd%3A0x2256fb8d0393e0f3!2sABB%20-%20Sabun%C3%A7u%20filial%C4%B1!5e0!3m2!1str!2s!4v1664343227734!5m2!1str!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <iframe style="display: none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24299.165344529018!2d49.9081197!3d40.4222368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4030625b02c25d05%3A0xc2e85edd1afc0e0!2sResearch%20Institute%20of%20Lung%20Disorders!5e0!3m2!1str!2s!4v1664343240062!5m2!1str!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <iframe style="display: none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24299.165344529018!2d49.9081197!3d40.4222368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403063abe6e7ac79%3A0x44c1b4495e676ae3!2sNazl%C4%B1%20Saray!5e0!3m2!1str!2s!4v1664343251534!5m2!1str!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Maps End-->
    @endsection