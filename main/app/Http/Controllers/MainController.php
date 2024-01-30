<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $products = Product::latest();

        if(request()->has('search')) {
            $products = $products->where('content', 'like', '%' . request()->get('search','') . '%');
        }

        $products = $products->paginate(3);
        return view('main', compact('products'));
    }
}
