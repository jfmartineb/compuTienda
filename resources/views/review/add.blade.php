@extends('layouts.app')
@section('title', $viewData["title"]) 
@section('subtitle', $viewData["subtitle"]) 
@section('content') 
<div class="container py-5" style = "margin-top: 104px;">
@guest
<<<<<<< HEAD:resources/views/review/add.blade.php
<h2>@lang("review.loginConf")</h2>
=======
<h2>{{ __('review.loginConf') }}</h2>
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314:resources/views/review/index.blade.php
@else
<div class="main-wrapper">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <div class="form-row">
            <!-- col left -->
            <div class="form-col">
<<<<<<< HEAD:resources/views/review/add.blade.php
                <h2>@lang("review.addReview") {{ $viewData['productName'] }}</h2>
=======
                <h2>{{ __('review.addReview') }} {{ $viewData['productName'] }}</h2>
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314:resources/views/review/index.blade.php
                <form class="register-form" method="POST" action="{{ route('review.add') }}">
                    @csrf
                    <div class = "form-item-list">
                        <!-- item -->
                        <div class="form-item">
<<<<<<< HEAD:resources/views/review/add.blade.php
                            <label for="name">@lang("review.title")</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" id="title" placeholder='@lang("review.title")' value="{{ old('title') }}">
=======
                            <label for="name">{{ __('review.title') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" placeholder={{ __('review.title') }} value="{{ old('title') }}">
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314:resources/views/review/index.blade.php
                            </div>
                        </div>
                        <!-- end of item -->
                        <!-- item -->
                        <div class="form-item">
<<<<<<< HEAD:resources/views/review/add.blade.php
                            <label for="price">@lang("review.score")</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="score" id="score" placeholder='@lang("review.score")' value="{{ old('score') }}" min="0" max="5">
=======
                            <label for="price">{{ __('review.score') }}</label>
                            <div class="form-group">
                                <input type="number" class="form-control" id="score" placeholder={{ __('review.score') }} value="{{ old('score') }}" min="0" max="5">
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314:resources/views/review/index.blade.php
                            </div>
                        </div>
                        <!-- end of item -->
                        <!-- item -->
                        <div class="form-item">
<<<<<<< HEAD:resources/views/review/add.blade.php
                            <label for="descrption">@lang("review.description")</label>
=======
                            <label for="descrption">{{ __('review.description') }}</label>
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314:resources/views/review/index.blade.php
                            <div class="form-group">
                                <span><i class="fas fa-user"></i></span>
                                <textarea name="description" id="description" rows="3">{{ old('descrption') }}</textarea>
                            </div>
                        </div>
                        <!-- end of item -->
                        <input id="productId" name="productId" type="hidden" value="{{ $viewData["productId"] }}">
                    <span class="submission-status">
                        <!-- text here -->
                    </span>

                    <button type="submit" id="submit-btn">
<<<<<<< HEAD:resources/views/review/add.blade.php
                        @lang("review.addComment")
=======
                        {{ __('review.addComment') }}
>>>>>>> eed009b7acd90ed36f95bcfcdb86e7e1f6b72314:resources/views/review/index.blade.php
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </button>
                </form>
            </div>
            <!-- end of col left -->
        </div>
@endguest
</div>
@endsection