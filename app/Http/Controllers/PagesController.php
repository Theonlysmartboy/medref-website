<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Medref | Home";
        return view('welcome')->with(compact('title'));
    }
    public function about(){
        $title = "Medref | About Us";
        return view('about')->with(compact('title'));
    }
    public function service(){
        $title = "Medref | What We Do";
        return view('service')->with(compact('title'));
    }
     public function blog(){
         
        $title = "Medref | Our Blogs ";
        return view('blog.blog')->with(compact('title'));
    }
    public function event(){
         
        $title = "Medref | Our Blogs ";
        return view('events.event')->with(compact('title'));
    }
     public function project(){
         
        $title = "Medref | Our Projects ";
        return view('projects.project')->with(compact('title'));
    }
     public function showContactForm(){
        $title = "Medref | Contact Us";
        return view('contact')->with(compact('title'));
    }
    public function createPage(Request $request) {
        if($request ){
            
        }
        $title = "Medref | Page Management";
        return view('pages.create')->with(compact('title'));
        
    }
    public function updatePage(Request $request) {
        if($request ){
            
        }
        $title = "Medref | Page Management";
        return view('pages.create')->with(compact('title'));
        
    }
    public function showRegisterForm() {
         $title = "Medref | Member Registration";
        return view('members.create')->with(compact('title'));
    }
    
}
