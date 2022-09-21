<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $score = [0, 0, 0, 0, 0];
        $product = Product::findOrFail($id);
        $viewData['title'] = $product['name'].' - Online Store';
        $viewData['subtitle'] = $product['name'].' - Product information';
        $viewData['product'] = $product;
        $reviews = $product->getReviews();
        $numReviews = 0;
        $medScore = 0;
        if (count($reviews) > 0){
            foreach ($reviews as $review) {
                $numReviews += 1;
                $medScore += $review->getScore();
            }
        } else {
            $numReviews = 1;
            $medScore = 0;
        }
        
        $avg = $medScore / $numReviews;
        for ($i = 0; $i < 5; $i++) {
            if ($avg > 0) {
                $score[$i] = 1;
            }
            $avg -= 1;
        }
        $viewData['score'] = $score;
        $viewData['totalReviews'] = $numReviews;
        $viewData['reviews'] = $reviews;

        return view('product.show')->with('viewData', $viewData);
    }

    public static function sumPricesByQuantities($products, $productsInSession)
    {
        $total = 0;
        foreach ($products as $product) {
            $total = $total + ($product->getPrice() * $productsInSession[$product->getId()]);
        }

        return $total;
    }
}
