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

    public function catalog(){
        return view('catalog',[
            'title' => 'Каталог товаров',
            'description' => 'Описание главной страницы'
        ]);
    }
    public function delivery(){
        return view('delivery',[
            'title' => 'Заказ и доставка',
            'description' => 'Описание главной страницы'
        ]);
    }
}
