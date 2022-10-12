<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="front/css/style.css">
    <link rel="stylesheet" href="front/css/reset.css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="front/css/responsive.css">
</head>

<body>
    <!--Header Start-->
    <header>
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="front/img/logo-azabrau.svg" alt="">
                    </a>
                </div>
                <div class="mobile-right">
                    <div class="social">
                        <a href="#">
                            <img src="front/img/face.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="front/img/inst.svg" alt="">
                        </a>
                    </div>
                    <div class="mobile-nav" bis_skin_checked="1">
                        <a href="javascript:void(0)">
                            <span class="active"></span>
                            <span class="active"></span>
                            <span class="active"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <img class="close-nav" src="front/img/x-icon.png" alt="">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="front/img/logo-azabrau.svg" alt="">
                    </a>
                </div>
                <nav>
                    <ul class="navbar">
                        <li class="nav-item">
                            <a href="{{route('about')}}">
                                HAQQIMIZDA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('products')}}">
                                AZ ABRAU
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('maps')}}">
                                SATIŞ MƏNTƏQƏLƏRİ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('news')}}">
                                XƏBƏRLƏR
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact')}}">
                                ƏLAQƏ
                            </a>
                        </li>
                    </ul>
                </nav>
                <form class="search" action="">
                    <a href="javascript:void(0)">
                        <img class="open-search" src="front/img/search.svg" alt="">
                    </a>
                    <input class="search-input" type="text">
                    <img class="close-search" src="front/img/x-icon.png" alt="">
                </form>
                <div class="social">
                    <a href="#">
                        <img src="front/img/face.svg" alt="">
                    </a>
                    <a href="#">
                        <img src="front/img/inst.svg" alt="">
                    </a>
                    <div class="lang-div"> 
                        <img src="front/img/lang.svg" alt="">
                        <ul class="lang">
                            <li>
                                <a href="#" class="active">
                                    AZ
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    EN
                                </a> 
                            </li>
                            <li> 
                                <a href="#">
                                    RU
                                </a>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header End-->