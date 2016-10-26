<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * 8197363456
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Category = Category::all();
        print_r($Category); 
        
        return view('site.index');
    }
}
