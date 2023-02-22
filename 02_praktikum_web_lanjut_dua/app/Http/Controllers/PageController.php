<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang^^";
    }

    public function about(){
        return "Nama: Muhammad Dzaka Murran Rusid\nNIM: 2141720076";
    }

    public function articles($id){
        echo "Halaman artikel dengan ID: $id";
    }
}
