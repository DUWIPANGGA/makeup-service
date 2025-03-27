<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    function listProducts(){
        $products=Product::all();
        return view('main.list-products',compact('products'));
    }
}
