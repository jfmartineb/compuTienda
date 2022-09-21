@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container py-5" style = "margin-top: 104px;">
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
                    @foreach($viewData['score'] as $i)
                        @if ($i == 1)
                            <span><i class = "fas fa-star"></i></span>
                        @else
                            <span><i class='fa fa-star' style='color:#c9c6b6'></i></span>
                        @endif
                    @endforeach
                    <span>({{ $viewData['totalReviews'] }} ratings)</span>
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
                <form method="GET" action="{{ route('review.index', ['id'=> $viewData["product"]->getId()]) }}"> 
                    <div class="row"> 
                        <div class="col-auto"> 
                            <button class="btn bg-primary text-white" type="submit">Add a coment<i class="fas fa-pen-fancy"></i></button> 
                        </div> 
                    </div> 
                </form>
            </div>
        </div>
    </div>
    <div class = "container">
        @foreach ($viewData['reviews'] as $review)
            <div class = "container" color = "#E8DFDD">
                <div class = "row">
                    <h3>Title: {{ $review->getTitle() }}</h3>
                </div>
                <div class = "row">
                    <p>By: {{ $review->getUser()["name"] }}</p>
                </div>
                <div class = "row">
                    <p>Score: 
                        @foreach($review->getScoreArray() as $i)
                            @if ($i == 1)
                                <span><i class = "fas fa-star"></i></span>
                            @else
                                <span><i class='fa fa-star' style='color:#c9c6b6'></i></span>
                            @endif
                        @endforeach
                    </p> 
                </div>
                <div class = "row">
                    <p>Description: {{ $review->getDescription() }} 
                    <form method="GET" action="{{ route('review.show', ['id'=> $review->getId()]) }}"> 
                         
                            <div class="col-auto"> 
                                <button class="btn bg-primary text-white" type="submit">View full<i class="fas fa-pen-fancy"></i></button> 
                            </div> 
                        
                    </form>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
