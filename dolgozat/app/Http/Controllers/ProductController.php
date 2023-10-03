<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(){
    $product = response()->json(Products::all());
    return $product;
  }  

  public function show($id){
    $product = response()->json(Products::all($id));
    return $product;
  }

  public function destroy($id){
    Products::find($id)->delete($id);
    return redirect('/products/list');
  }

  public function store(Request $request){
    $product = new Products();
    $product->type_id = $request->type_id;
    $product->name = $request->name;
    $product->description = $request->description;
    $product->cost = $request->cost;
    $product->save();
  }

  public function update(Request $request, $id){
    $product = new Products($id);
    $product->type_id = $request->type_id;
    $product->name = $request->name;
    $product->description = $request->description;
    $product->cost = $request->cost;
    $product->save();
  }
}
