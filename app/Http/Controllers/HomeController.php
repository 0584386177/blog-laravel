<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $template = "pages.home.page";
        return view('MasterLayout',compact('template'));
    }
}
