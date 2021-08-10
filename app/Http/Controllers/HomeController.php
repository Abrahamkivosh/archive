<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::latest()->with(["groups"=>function($query){
            return $query->where("user_id", Auth::user()->id);
        }])-> withCount(["groups"=>function($query){
            return $query->where("user_id", Auth::user()->id);
        }])->paginate(10) ;
        // return $categories->chunk(3) ;
        // return $categories ;
        return view('admin.index',compact('categories'));
    }

   
}
