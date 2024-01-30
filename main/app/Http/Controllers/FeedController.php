<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();

        // id of all the poeple that we are following
        $followingIDs = $user->followings()->pluck('user_id');
        $products = Product::whereIn('user_id', $followingIDs)->latest();

        if(request()->has('search')) {
            $products = $products->where('content', 'like', '%' . request()->get('search','') . '%');
        }

        $products = $products->paginate(3);
        $search_bar = true;
        return view('main', compact('products', 'search_bar'));
    }
}
