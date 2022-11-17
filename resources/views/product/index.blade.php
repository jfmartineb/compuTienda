@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<<<<<<< HEAD
<div class="container py-5" style = "margin-top: 104px;">
    <div class = "collection-list mt-4 row gx-0 gy-3">
                        @foreach ($viewData["products"] as $product)
                            <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                                <div class = "collection-img position-relative">
                                    <img  src="{{ asset('/storage/'.$product->getImage()) }}"  class="card-img-top img-card">
                                </div>
                                <div class = "text-center">
                                    
                                    <p class = "text-capitalize my-1">{{ $product->getName() }}</p>
                                    <span class = "fw-bold">$ {{ $product->getPrice() }}</span>
                                    <br>
                                    <a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class = "btn mt-3 text-uppercase">@lang("product.indexView")</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
=======
<div class="container py-5" style="margin-top: 104px;">
    <div class="collection-list mt-4 row gx-0 gy-3">
        @foreach ($viewData["products"] as $product)
        <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
            <div class="collection-img position-relative">
                <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top img-card">
            </div>
            <div class="text-center">

                <p class="text-capitalize my-1">{{ $product->getName() }}</p>
                <span class="fw-bold">$ {{ $product->getPrice() }}</span>
                <br>
                <a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="btn mt-3 text-uppercase">{{ __('product.indexView') }}</a>
            </div>
        </div>
        @endforeach
    </div>
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314
</div>
@endsection