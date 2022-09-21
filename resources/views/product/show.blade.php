@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img  src="{{ asset('/storage/'.$viewData["product"]->getImage()) }}" alt = "watch">
                    </div>
                    <div class = "hover-container">
                        <div><img src="{{ asset('/img/Ejemplo2.jpg') }}"></div>
                        <div><img src="{{ asset('/img/Ejemplo3.jpg') }}"></div>
                        <div><img src="{{ asset('/img/Ejemplo4.jpg') }}"></div>
                        <div><img src="{{ asset('/img/Ejemplo5.jpg') }}"></div>
                        <div><img src="{{ asset('/img/Ejemplo6.jpg') }}"></div>
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

    <script>
    const allHoverImages = document.querySelectorAll('.hover-container div img');
    const imgContainer = document.querySelector('.img-container');
    
    window.addEventListener('DOMContentLoaded', () => { allHoverImages[0].parentElement.classList.add('active');});
    
    allHoverImages.forEach((image) => {image.addEventListener('mouseover', () =>{ imgContainer.querySelector('img').src = image.src;
        resetActiveImg();
        image.parentElement.classList.add('active');});
    });
    
    function resetActiveImg(){
        allHoverImages.forEach((img) => {
        img.parentElement.classList.remove('active');
    });
}
    </script>
@endsection
