@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container py-5" style = "margin-top: 104px;">
    <div class = "collection-list mt-4 row gx-0 gy-3">
                        @foreach ($viewData["products"] as $product)
                            <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                                <div class = "collection-img position-relative">
                                    <img  src="{{ asset('/storage/'.$product->getImage()) }}"  class="card-img-top img-card">
                                    <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                                </div>
                                <div class = "text-center">
                                    <div class = "rating mt-3">
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    </div>
                                    <p class = "text-capitalize my-1">{{ $product->getName() }}</p>
                                    <span class = "fw-bold">$ {{ $product["price"] }}</span>
                                    <br>
                                    <a href="{{ route('product.show', ['id'=> $product["id"]]) }}" class = "btn mt-3 text-uppercase">view</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
</div>
@endsection
