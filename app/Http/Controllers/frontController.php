<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        return view('front.home');
    }public function about(){
        return view('front.about');
    }public function news(){
        return view('front.news');
    }public function news_single(){
        return view('front.news-single');
    }public function products(){
        return view('front.products');
    }public function product_single(){
        return view('front.products-single');
    }public function contact(){
        return view('front.contact');
    }public function maps(){
        return view('front.maps');
    }
}
