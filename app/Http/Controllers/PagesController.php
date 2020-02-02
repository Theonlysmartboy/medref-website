<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Medref|Home";
        return view('welcome')->with(compact('title'));
    }
}
