<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    Public function index()
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }
    Public function show($id)
    {
        $product = Product::FindorFail($id);
        return view('shop.show', compact('product'));
    }
}
