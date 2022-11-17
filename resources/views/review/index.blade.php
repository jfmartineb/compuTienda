@extends('layouts.app')
@section('title', $viewData["title"]) 
@section('subtitle', $viewData["subtitle"]) 
@section('content') 
<div class="container py-5" style = "margin-top: 104px;">
@guest
<h2>{{ __('review.loginConf') }}</h2>
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
                <h2>{{ __('review.addReview') }} {{ $viewData['productName'] }}</h2>
                <form class="register-form" method="POST" action="{{ route('review.add') }}">
                    @csrf
                    <div class = "form-item-list">
                        <!-- item -->
                        <div class="form-item">
                            <label for="name">{{ __('review.title') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" placeholder={{ __('review.title') }} value="{{ old('title') }}">
                            </div>
                        </div>
                        <!-- end of item -->
                        <!-- item -->
                        <div class="form-item">
                            <label for="price">{{ __('review.score') }}</label>
                            <div class="form-group">
                                <input type="number" class="form-control" id="score" placeholder={{ __('review.score') }} value="{{ old('score') }}" min="0" max="5">
                            </div>
                        </div>
                        <!-- end of item -->
                        <!-- item -->
                        <div class="form-item">
                            <label for="descrption">{{ __('review.description') }}</label>
                            <div class="form-group">
                                <span><i class="fas fa-user"></i></span>
                                <textarea name="description" id="description" rows="3">{{ old('descrption') }}</textarea>
                            </div>
                        </div>
                        <!-- end of item -->
                        <input id="productId" name="prodId" type="hidden" value="{{ $viewData["productId"] }}">
                    <span class="submission-status">
                        <!-- text here -->
                    </span>

                    <button type="submit" id="submit-btn">
                        {{ __('review.addComment') }}
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </button>
                </form>
            </div>
            <!-- end of col left -->
        </div>
@endguest
</div>
@endsection