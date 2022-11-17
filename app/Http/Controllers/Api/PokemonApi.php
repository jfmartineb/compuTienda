<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;

class ExternalApi extends Controller

{
    public function index()
    {
        $pokemons = Http::get("url del equipo tienda pokemon")->json();
        $viewData = [];
        $viewData['title'] = 'Pokemon Store API - Online Store';
        $viewData['subtitle'] = 'Pokemons';
        $viewData['pokemons'] = $pokemons['data'];
        return view('api.pokemons')->with('viewData', $viewData);
    }
}