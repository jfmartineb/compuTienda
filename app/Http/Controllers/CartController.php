<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Controllers\ProductController;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $total = 0; 
        $productsInCart = []; 
        $productsInSession = $request->session()->get("products"); 
        if ($productsInSession) 
        { 
            $productsInCart = Product::findMany(array_keys($productsInSession)); 
            $total = ProductController::sumPricesByQuantities($productsInCart, $productsInSession); 
        } 
        $viewData = []; 
        $viewData["title"] = "Cart - Online Store"; 
        $viewData["subtitle"] = "Shopping Cart"; 
        $viewData["total"] = 
        $total; $viewData["products"] = 
        $productsInCart; 
        return view('cart.index')->with("viewData", $viewData);
    }

    public function add($id, Request $request)
    {
        $products = $request->session()->get("products");
        $products[$id] = $id;
        $request->session()->put('products', $products);
        return back();
    }

    public function removeAll(Request $request)
    {
        $request->session()->forget('products');
        return back();
    }
}
