<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\scart;

class ProductController extends Controller
{

    public function index()
    {
      $products = Product::all();
      return $products;
    }


    public function create(Request $request)
    {
        $product = new Product();
        $product->product_id = $request->product_id;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->category= $request->category;
        $product->imageUrl = $request->imageUrl;
        $product->save();
    }


    public function store(Request $request)
    {
        $product = new Product();
        $product->product_id = $request->product_id;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->category= $request->category;
        $product->imageUrl = $request->imageUrl;
        $product->save();
    }
    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('scart') ? Session::get('scart') : null;
        $scart = new scart($oldCart);
        $scart->add($product, $product->id);
        dd($request->session()->get('scart'));

        $request->session()->put('scart', $scart);

    }


    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }


    public function edit($id)
    { 
     $product = Product::find($id);
     return $product;
    }


    public function update(Request $request, $id)
    {
        Product::where('product_id', $id)->update($request->all());
         
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
}
