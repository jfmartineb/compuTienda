<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;

class ExternalApi extends Controller

{
    public function index()
    {
        $news = Http::get("https://newsapi.org/v2/top-headlines?country=us&category=technology&apiKey=ca5486939c3644c5bb4b7618f25c3b9a")->json();
        $viewData = [];
        $viewData['title'] = 'External API - Online Store';
        $viewData['subtitle'] = 'News';
        $random = rand(0, count($news['articles']) - 1);
        $viewData['new'] = $news['articles'][$random];
        return view('api.news')->with('viewData', $viewData);
    }
}