<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $products = Product::latest();

        if(request()->has('search')) {
            $products = $products->where('title', 'like', '%' . request()->get('search','') . '%');
        }

        $products = $products->paginate(6);

        $search_bar = true;
        return view('main', compact('products', 'search_bar'));
    }
}
