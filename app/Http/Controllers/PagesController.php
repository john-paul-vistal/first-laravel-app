<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "WELCOME TO LARAVEL!";
        // return view("pages.index",compact('title')); 
        return view("pages.index")->with('title',$title); 
    }
    public function about(){
        $title = "ABOUT US";
        return view("pages.about")->with('title',$title);
    }
    public function services(){
        $data = array(
            'title' => 'SERVICES',
            'services' => ["Web Development","Digital Art","Cinematography","Tutorials"]
        );
        return view("pages.services")->with($data);
    }
}
