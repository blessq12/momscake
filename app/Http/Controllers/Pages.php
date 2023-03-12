<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function __construct(){

    }

    public function index(){
        return view('index',[
            'title' => 'Главная страница',
            'description' => 'Описание главной страницы'
        ]);
    }
    public function about(){

    }
    public function catalog(){

    }
    public function contact(){

    }
}
