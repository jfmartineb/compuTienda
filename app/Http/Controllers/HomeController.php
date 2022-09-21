<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('home.index')->with('viewData', $viewData);
    }

    public function about()
    {
        $data1 = 'About us - Online Store';
        $data2 = 'About us';
        $description = 'This is an about page ...';
        $author = 'Developed by: Your Name';

        return view('home.about')->with('title', $data1)
        ->with('subtitle', $data2)
        ->with('description', $description)
        ->with('author', $author);

        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
