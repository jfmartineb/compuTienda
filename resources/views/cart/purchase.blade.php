@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container py-5" style="margin-top: 104px;">
    <div class="card">
        <div class="card-header">
            {{ __('cart.purchaseCompleted') }}
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                {{ __('cart.congratulations') }} <b>#{{ $viewData["order"]->getId() }}</b>
            </div>
        </div>
    </div>
</div>
@endsection