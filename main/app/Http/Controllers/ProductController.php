<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function manage_product() {
        return view('products.manage-product');
    }

    public function show(Product $product) {
    //        return view('products.show-product', compact( 'product'));
    }

    public function store() {
        $validated = request()->validate([
            'content' => 'required|min:5',
            'title' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $validated['user_id'] = auth()->user()->id;

        if(request()->hasFile('image')) {
            $imagePath = request()->file('image')->store('images', 'public');
            $validated['image'] = $imagePath;
        }

        Product::create($validated);

        return redirect()->route('main');
    }

    public function edit(Product $product) {
        $editing = true;
        return view('products.manage-product', compact('product', 'editing'));
    }

    public function update(Product $product) {
        $validated = request()->validate([
            'content' => 'required|min:5|max:200',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if(request()->hasFile('image')) {
            $imagePath = request()->file('image')->store('images', 'public');
            $validated['image'] = $imagePath;

        }
        $product->update($validated);

        return redirect()->route('products.show', $product->id);
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('main');
    }
}
