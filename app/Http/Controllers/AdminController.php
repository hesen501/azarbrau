<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin/dashboard');
    }
    public function table(){
        return view('admin/table');
    }  
    public function error(){
        return view('admin/404');
    }
    public function blank(){
        return view('admin/blank');
    }
    public function profile(){
        return view('admin/profile');
    }
    public function icon(){
        return view('admin/fontawesome');
    }
    public function map(){
        return view('admin/map');
    }


}