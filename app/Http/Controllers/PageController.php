<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function photos(){
        return view('admin.photos');
    }
    public function documents(){
        return view('admin.documents');
    }
    public function events(){
        return view('admin.events');
    }
    public function videos(){
        return view('admin.videos');
    }
    public function music(){
        return view('admin.music');
    }
    public function notes(){
        return view('admin.notes');
    }
}
