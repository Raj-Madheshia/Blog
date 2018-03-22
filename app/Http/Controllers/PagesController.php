<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $title = 'BLOG WEB';
        return view('pages.home', compact('title'));
    }
    public function about(){

        return view('pages.about')->with('title', "This is the parameter");
    }
    public function services(){

        $data = array(
            'title' => 'Services',
            'elements' => ['web design' , 'programmming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
