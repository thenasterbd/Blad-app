<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class MovieController extends Controller
{
    public function index(){
        $titel = 'listados de peliculas ';
       return view('movie.index',[
        'titel' =>$titel
       ]
    );
    }

    public function detail(){
        return view('peliculas.detail');
    }

    public function redirect(){
        return redirect()->action('/peliculas');
    }

}


