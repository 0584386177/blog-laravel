<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function index(){
        $user = Auth::user();
        $template = "admin.pages.home";
        return view('layouts.AdminLayout',compact('template','user'));
    }
}
