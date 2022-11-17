<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;

class StoreApi extends Controller

{
    public function index()
    {
        $store = Http::get("http://abarrotes-store.ml/public/api/products/paginate")->json();
        $viewData = [];
        $viewData['title'] = 'Tiendita API - Online Store';
        $viewData['subtitle'] = $store['additionalData']['storeName'];
        $viewData['link'] = $store['additionalData']['storeProductsLink'];
        $viewData['store'] = $store['data'];
        return view('api.store')->with('viewData', $viewData);
    }
}