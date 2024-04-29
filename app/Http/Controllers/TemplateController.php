<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function service(){
        return view('home.service');
    }

    public function register(){
        return view('auth.register');
    }

    public function registe(){
        return view('auth.registe');
    }


    public function login(){
        return view('auth.login');
    }

    public function loginn(){
        return view('auth.loginn');
    }

    public function profil(){
        return view('frontend.profil');
    }
}
