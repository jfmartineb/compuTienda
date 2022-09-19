@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "images/w1.png" alt = "watch">
                    </div>
                    <div class = "hover-container">
                        <div><img src = "images/w1.png"></div>
                        <div><img src = "images/w2.png"></div>
                        <div><img src = "images/w3.png"></div>
                        <div><img src = "images/w4.png"></div>
                        <div><img src = "images/w5.png"></div>
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name">{{ $viewData["product"]["name"] }}</span>
                    <span class = "product-price">$ {{ $viewData["product"]["price"] }}</span>
                    <div class = "product-rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star-half-alt"></i></span>
                        <span>(350 ratings)</span>
                    </div>
                    <p class = "product-a"><strong>Stock :</strong> {{ $viewData["product"]["stock"] }}</p>
                    <p class = "product-a"><strong>Brand :</strong> {{ $viewData["product"]["brand"] }}</p>
                    <p class = "product-a"><strong>Group :</strong> {{ $viewData["product"]["group"] }}</p>

                    <p class = "product-description">{{ $viewData["product"]["description"] }}</p>
                    <div class = "btn-groups">
                        <button type = "button" class = "add-cart-btn"><i class = "fas fa-shopping-cart"></i>add to cart</button>
                        <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src = "script.js"></script>
@endsection
