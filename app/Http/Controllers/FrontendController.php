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
       dd($id);
        $productdetails=Product::where('id',$id)->first();
        dd($productdetails);
        return view('frontend.pages.product.productdetails',compact('productdetails'));
    }

}
