<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class SiteController extends Controller
{
    private $latestProductID=1;

    
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
        
        $latestProduct = Category::find($this->latestProductID)->latestProduct;
        return view('site.index',  compact('latestProduct'));
    }
    
    public function singleproduct(Request $request,$pId=null){
        
        if(isset($pId) && !empty($pId)){
             $ProductInfo=  Product::find($pId);
             return view('site.single',compact('ProductInfo'));
        }
        return view('site.single');
    }
    
   
            
           
   
    public function contact(Request $request){
        return  view ('site.contact');
    }
        
    public function shoppage(Request $request){
        
        return view('site.shoppage');
        
        
    }
        
        
    
            
}
