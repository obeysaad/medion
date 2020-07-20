<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function index(){
     return view ('Front.Page.home');
    }
    public function doctor(){
        return view ('Front.Page.doctor');
    }

    public function clini(){
        return view ('Front.Page.clini');
    }

    public function about(){
        return view ('Front.Page.about');
    }

    public function contact(){
        return view ('Front.Page.contact');
    }

}
