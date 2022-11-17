@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container py-5" style = "margin-top: 104px;">
    <div class = "container">
        <div class = "product-div">
                <span class = "product-name">{{ $viewData["review"]->getTitle() }}</span>
                <span><div class = "row">
                    <p>Score: 
                        @foreach($viewData["review"]->getScoreArray() as $i)
                            @if ($i == 1)
                                <span><i class = "fas fa-star"></i></span>
                            @else
                                <span><i class='fa fa-star' style='color:#c9c6b6'></i></span>
                            @endif
                        @endforeach
                    </p> 
                </div></span>
                <p class = "product-description">{{ $viewData["review"]->getDescription() }}</p>
                <form method="GET" action="{{ route('product.show', ['id'=> $viewData["review"]->getProduct()->getId()]) }}"> 
                    <div class="row"> 
                        <div class="col-auto"> 
                            <button class="btn bg-primary text-white" type="submit">{{ __('review.back') }}<i class="fas fa-pen-fancy"></i></button> 
                        </div> 
                    </div> 
                </form>
        </div>
    </div>
                
    </div>
</div>
@endsection