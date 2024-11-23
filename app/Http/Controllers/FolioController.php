<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolioController extends Controller
{
    public function folioApp(){
        return view('folio.app');
    }
}
