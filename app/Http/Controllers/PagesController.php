<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        //return view('pages.index', compact('title')); - moze i tak i ovo dolje
        // to je za dinamicko ubacivanje
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['web design', 'programming', 'SEO'] 
        );
        return view('pages.services')->with($data) ;
    }
}
