<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data['menu'] = Category::with('allChildren')->where('parent_id', null)->get();
        $data['brand'] = Brand::get();
//        dd($data['brand'][2]['image']);


        return view('website.index', compact('data'));
    }

    public function getAllCategories($name)
    {
//        dd($name);
        $data['menu'] = Category::with('allChildren')->where('parent_id', null)->get();
        $data['brand'] = Brand::get();
        $data['categories'] = Category::with('allChildren')->where('name',$name)->first();
//        dd($data['categories']);


        return view('website.category_all', compact('data'));
    }
}
