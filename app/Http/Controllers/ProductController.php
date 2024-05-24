<?php

namespace App\Http\Controllers;
use App\models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){

        return view('products.create');

    }
    public function index(){

        $products = Product::orderBy('id', 'desc')->get();
        return view ('products.listar',compact('products'))  ;
    }

    public function store(Request $request){

      $product= new Product();
      $product-> name=$request->name;
      $product-> price=$request->price;
      $product-> cant =$request->cant;
      $product-> description =$request->description;
      $product-> date_exp=$request->date_exp;
      $product->save();
      return $product;
    }
}

