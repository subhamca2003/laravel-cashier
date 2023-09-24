<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(10)->get();
        return view('products.index', compact('products'));
    }

    public function buy(Product $product)
    {
        return view('products.buy', compact('product'));
    }

    public function charge(Request $request, Product $product)
    {
        $user = $request->user();
    
        $user->charge($product->price * 100, $product->name);
    
        // You can add additional logic here, e.g., updating orders
    
        return redirect()->route('thankyou');
    }
}
