<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index($productId){
        $viewData = [];
        $viewData["title"] = "Add a review";
        $product = Product::findOrFail($productId);
        $viewData["subtitle"] =  "Write a review of product".$product->getName();
        $viewData["productName"] = $product->getName();
        $viewData["productId"] = $productId;
        return view('review.index')->with("viewData", $viewData);
    }

    public function add(Request $request){
        Review::validation($request);
        $review = new Review();
        $review->setTitle($request->input('title'));
        $review->setScore($request->input('score'));
        $review->setDescription($request->input('description'));
        $review->setProduct($request->input("productId"));
        $review->setUser(auth()->id());
        $review->save();

        return redirect()->route('product.show', $request->input("productId"));
    }

    public function show($id){
        $viewData = [];
        $review = Review::findOrFail($id);
        $viewData['title'] = "Review of ".$review->getTitle();
        $viewData['subtitle'] = $review->getTitle();
        $viewData['review'] = $review;

        return view('review.show')->with("viewData", $viewData);
    }
}