<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class SiteController extends Controller
{ //9582428548
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
        $latestProduct = Category::find(1)->latestProduct;
        return view('site.index',  compact('latestProduct'));
    }
    
    public function singleproduct(Request $request,$ProductId=NULL){
        
        if(isset($ProductId) && !empty($ProductId)){
            
             $ProductInfo=  Product::find($ProductId);
//            /echo "<pre>";print_r($ProductInfo); die;
             return view('site.single',compact('ProductInfo'));
        }
        return view('site.single');
    }
            
           
   
    public function contact(){
        
        
    }
    
    public function shoppage(){
        
        
    }
        
        
    
            
}
