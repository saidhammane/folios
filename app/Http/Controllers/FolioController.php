<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolioController extends Controller
{
    public function app(){
        return view('folio.app');
    }

    public function portfolio(){
        return view('folio.pages.portfolio');
    }

    public function contact(){
        return view('folio.pages.contact');
    }

    public function blog(){
        return view('folio.pages.blog');
    }

    public function blogDetail(){
        return view('folio.pages.blogdetail');
    }

    public function history(){
        return view('folio.pages.history');
    }
    public function mail(){
        return view('folio.pages.mail');
    }
}
