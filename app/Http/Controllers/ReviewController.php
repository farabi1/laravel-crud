<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;
use App\Models\User;

class ReviewController extends Controller
{

    public function index(){
        return view('review');
    }
}
