<?php

namespace App\Http\Controllers\Api;


use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index()
    {
        $productos = Product::all();
        return $products;
    }


    public function store(Request $request)
    {
        $product =  new Product();
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->price = $request->price;
    }


    public function show($id)
    {
    }

  
    public function update(Request $request, $id)
    {
    }

  
    public function destroy($id)
    {

    }
}
