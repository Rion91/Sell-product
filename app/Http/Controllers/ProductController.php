<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.list',['products'=>$products]);
    }

    public function create(){
        return view('product.add');
    }

    public function store(Request $request){
        $newPost=Product::create([
            'title'=>$request->title,
            'short_notes'=>$request->short_notes,
            'price'=>$request->price
        ]);
        return redirect()->route('dashboard');
    }

    public function edit(Product $product){
        return view('product.edit',[
            'product'=>$product
        ]);
    }

    public function update(Request $request, Product $product){
        $product->update([
            'title'=>$request->title,
            'short_notes'=>$request->short_notes,
            'price'=>$request->price
        ]);
        return redirect()->route('dashboard',$product);
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('dashboard');
    }
}
