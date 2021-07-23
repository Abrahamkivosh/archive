<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Group;

class PageController extends Controller
{
    public function index(){

        $categories =Category::all();
        return view('admin.index',compact('categories'));
    }
    // public function photos(){
    //     $categories = Category::where("name","photos")->with("groups")->paginate(9);
    //     return view('admin.photos',compact('categories'));
    // }
    // public function grouphotos(Request $id){
    //     $group = Group::where('id',$id)->first();
    //     return view('admin/photos.singlegroup',compact('group'));
    // }
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
