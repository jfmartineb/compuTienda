<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller

{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }

    public function create()
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";
        return view('admin.product.create')->with("viewData",$viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "category" => "required",
            "brand" => "required",
            "group" => "required",
            "price" => "required|numeric|gt:0",
            "stock" => "required|numeric",
            "description" => "required",
        ]);
        
        $newProduct = new Product();
        $newProduct->setName($request->input('name'));
        $newProduct->setCategory($request->input('category'));
        $newProduct->setBrand($request->input('brand'));
        $newProduct->setGroup($request->input('group'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setStock($request->input('stock'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->save();
        
        return back();
    }
}