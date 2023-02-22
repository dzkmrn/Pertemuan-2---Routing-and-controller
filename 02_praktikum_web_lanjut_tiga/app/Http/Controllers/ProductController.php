<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function eduGames(){
        return redirect()->to('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function marbelFriends(){
        return redirect()->to('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }
    public function ririStory(){
        return redirect()->to('https://www.educastudio.com/category/riri-story-books');
    }
    public function kolakKids(){
        return redirect()->to('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
