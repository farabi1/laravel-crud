<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class FrontendController extends Controller
{
    public function home(){
        return view('welcome');

    }
    public function index(){
        $products=Product::get();
        return view('frontend.pages.home',compact('products'));
    }

    public function productdetails($id){
       
        $productdetail=Product::where('id',$id)->first();
        
        return view('frontend.pages.product.productdetails',compact('productdetail'));
    }

}
