@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <!-- header -->
    <header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
        <div class = "container h-100 d-flex align-items-center carousel-inner">
            <div class = "text-center carousel-item active">
                <h2 class = "text-capitalize text-white">@lang("home.best")</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">@lang("home.new")</h1>
                <a href = "#" class = "btn mt-3 text-uppercase">@lang("home.now")</a>
            </div>
            <div class = "text-center carousel-item">
                <h2 class = "text-capitalize text-white">@lang("home.offer")</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">@lang("home.season")</h1>
                <a href = "#" class = "btn mt-3 text-uppercase">@lang("home.now")</a>
            </div>
        </div>

        <button class = "carousel-control-prev" type = "button" data-bs-target="#header" data-bs-slide = "prev">
            <span class = "carousel-control-prev-icon"></span>
        </button>
        <button class = "carousel-control-next" type = "button" data-bs-target="#header" data-bs-slide = "next">
            <span class = "carousel-control-next-icon"></span>
        </button>
    </header>
    <!-- header -->

    <!-- collection -->
    <section id = "collection" class = "py-5">
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative d-inline-block">@lang("home.collection")</h2>
            </div>

            <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <a href="{{ route('product.index') }}" class = "btn m-2 text-dark">@lang("home.all")</a>
                    <a href="{{ route('product.best') }}" class = "btn m-2 text-dark">@lang("home.sellers")</a>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".feat">@lang("home.featured")</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".new">@lang("home.season")</button>
                </div>
            </div>
        </div>
    </section>
    <!-- collection -->
@endsection
