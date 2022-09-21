@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class = "main-wrapper">
    <div class = "container">
        <div class = "product-div">
            <div class = "product-div-left">
                <div class = "img-container">
                    <div class="col-md-4"> 
                        <img src="{{ asset('/storage/'.$viewData["product"]->getImage()) }}" class="card-img-top"> 
                    </div>
                </div>
            </div>
            <div class = "product-div-right">
                <span class = "product-name">{{ $viewData["product"]->getName() }}</span>
                <span class = "product-price">$ {{ $viewData["product"]->getPrice() }}</span>
                <div class = "product-rating">
                    <span><i class = "fas fa-star"></i></span>
                    <span><i class = "fas fa-star"></i></span>
                    <span><i class = "fas fa-star"></i></span>
                    <span><i class = "fas fa-star"></i></span>
                    <span><i class = "fas fa-star-half-alt"></i></span>
                    <span>(350 ratings)</span>
                </div>
                <p class = "product-a"><strong>Stock :</strong> {{ $viewData["product"]->getStock() }}</p>
                <p class = "product-a"><strong>Brand :</strong> {{ $viewData["product"]->getBrand() }}</p>
                <p class = "product-a"><strong>Group :</strong> {{ $viewData["product"]->getGroup() }}</p>

                <p class = "product-description">{{ $viewData["product"]->getDescription() }}</p>
                <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}"> 
                    <div class="row"> 
                        @csrf 
                        <div class="col-auto"> 
                            <div class="input-group col-auto"> 
                                <div class="input-group-text">Quantity</div> 
                                <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1"> 
                            </div> 
                        </div> 
                        <div class="col-auto"> 
                            <button class="btn bg-primary text-white" type="submit">Add to cart<i class = "fas fa-shopping-cart"></i></button> 
                        </div> 
                    </div> 
                </form>
                <form method="GET" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}"> 
                    <div class="row"> 
                        <div class="col-auto"> 
                            <button class="btn bg-primary text-white" type="submit">Add a coment<i class="fas fa-pen-fancy"></i></button> 
                        </div> 
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
