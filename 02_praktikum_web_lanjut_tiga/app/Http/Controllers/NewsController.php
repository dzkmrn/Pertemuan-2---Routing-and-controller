<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($berita = null){
        if($berita==null){
            header ('Location: https://www.educastudio.com/news');
            exit();
        }else{
            header ('Location: https://www.educastudio.com/news/'.$berita);
            exit();
        }
    }
}

