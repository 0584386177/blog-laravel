<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index(){
        $template = "pages.home.page";
        return view('MasterLayout',compact('template'));
    }
}
