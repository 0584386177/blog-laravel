<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index(){
        $template = "admin.pages.home";
        $hello = "Hello";
        return view('layouts.AdminLayout',compact('template','hello'));
    }
}
