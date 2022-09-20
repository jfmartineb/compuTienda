<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

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
        $newProduct = new Product();
        $newProduct->setName($request->input('name'));
        $newProduct->setCategory($request->input('category'));
        $newProduct->setBrand($request->input('brand'));
        $newProduct->setGroup($request->input('group'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setStock($request->input('stock'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->save();

        if ($request->hasFile('image')) 
        {
            $imageName = $newProduct->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put($imageName,file_get_contents($request->file('image')->getRealPath()));
            $newProduct->setImage($imageName);
            $newProduct->save();
        }
        
        return back();
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Product - Online Store";
        $viewData["product"] = Product::findOrFail($id);
        return view('admin.product.edit')->with("viewData", $viewData);
    } 

    public function update(Request $request, $id)
    {
        
        $product = Product::findOrFail($id);
        $newProduct = new Product();
        $newProduct->setName($request->input('name'));
        $newProduct->setCategory($request->input('category'));
        $newProduct->setBrand($request->input('brand'));
        $newProduct->setGroup($request->input('group'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setStock($request->input('stock'));
        $newProduct->setDescription($request->input('description'));
        
        if ($request->hasFile('image')) {
            $imageName = $product->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->setImage($imageName);
        }
        
        $product->save();
        return redirect()->route('admin.product.index');
    }
}