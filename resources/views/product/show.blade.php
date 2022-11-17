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
<<<<<<< HEAD
                <p class = "product-a"><strong>@lang("product.showStock") :</strong> {{ $viewData["product"]->getStock() }}</p>
                <p class = "product-a"><strong>@lang("product.showBrand") :</strong> {{ $viewData["product"]->getBrand() }}</p>
                <p class = "product-a"><strong>@lang("product.showGroup") :</strong> {{ $viewData["product"]->getGroup() }}</p>
=======
                <p class = "product-a"><strong>{{ __('product.showStock') }} :</strong> {{ $viewData["product"]->getStock() }}</p>
                <p class = "product-a"><strong>{{ __('product.showBrand') }} :</strong> {{ $viewData["product"]->getBrand() }}</p>
                <p class = "product-a"><strong>{{ __('product.showGroup') }} :</strong> {{ $viewData["product"]->getGroup() }}</p>
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314

                <p class = "product-description">{{ $viewData["product"]->getDescription() }}</p>
                <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}"> 
                    <div class="row"> 
                        @csrf 
                        <div class="col-auto"> 
                            <div class="input-group col-auto"> 
<<<<<<< HEAD
                                <div class="input-group-text">@lang("product.showQuantity")</div> 
=======
                                <div class="input-group-text">{{ __('product.showQuantity') }}</div> 
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314
                                <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1"> 
                            </div> 
                        </div> 
                        <div class="col-auto"> 
<<<<<<< HEAD
                            <button class="btn bg-primary text-white" type="submit">@lang("product.showAdd")<i class = "fas fa-shopping-cart"></i></button> 
=======
                            <button class="btn bg-primary text-white" type="submit">{{ __('product.showAdd') }}<i class = "fas fa-shopping-cart"></i></button> 
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314
                        </div> 
                    </div> 
                </form>
                <form method="GET" action="{{ route('review.index', ['id'=> $viewData["product"]->getId()]) }}"> 
                    <div class="row"> 
                        <div class="col-auto"> 
<<<<<<< HEAD
                            <button class="btn bg-primary text-white" type="submit">@lang("product.showComment")<i class="fas fa-pen-fancy"></i></button> 
=======
                            <button class="btn bg-primary text-white" type="submit">{{ __('product.showComment') }}<i class="fas fa-pen-fancy"></i></button> 
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314
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
<<<<<<< HEAD
                    <h3>@lang("product.showTitle"): {{ $review->getTitle() }}</h3>
                </div>
                <div class = "row">
                    <p>@lang("product.showBy"): {{ $review->getUser()["name"] }}</p>
                </div>
                <div class = "row">
                    <p>@lang("product.showScore"): 
=======
                    <h3>{{ __('product.showTitle') }}: {{ $review->getTitle() }}</h3>
                </div>
                <div class = "row">
                    <p>{{ __('product.showBy') }}: {{ $review->getUser()["name"] }}</p>
                </div>
                <div class = "row">
                    <p>{{ __('product.showScore') }}: 
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314
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
<<<<<<< HEAD
                    <p>@lang("product.showDescription"): {{ $review->getDescription() }} 
                    <form method="GET" action="{{ route('review.show', ['id'=> $review->getId()]) }}"> 
                         
                            <div class="col-auto"> 
                                <button class="btn bg-primary text-white" type="submit">@lang("product.showView")<i class="fas fa-pen-fancy"></i></button> 
=======
                    <p>{{ __('product.showDescription') }}: {{ $review->getDescription() }} 
                    <form method="GET" action="{{ route('review.show', ['id'=> $review->getId()]) }}"> 
                         
                            <div class="col-auto"> 
                                <button class="btn bg-primary text-white" type="submit">{{ __('product.showView') }}<i class="fas fa-pen-fancy"></i></button> 
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314
                            </div> 
                        
                    </form>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
