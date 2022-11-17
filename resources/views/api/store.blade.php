@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container py-5" style="margin-top: 104px;">
    <div class="collection-list mt-4 row gx-0 gy-3">
        @foreach ($viewData["store"] as $store)
            <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                <div class="text-center">
                    <p class="text-capitalize my-1">{{ $store['id'] }}</p>
                    <p class="text-capitalize my-1">{{ $store['name'] }}</p>
                    <span class="fw-bold">$ {{ $store['price'] }}</span>
                    <br>
                </div>
            </div>
        @endforeach
        <a href="{{ $viewData['link'] }}" target="_blank" class="btn mt-3 text-uppercase">view</a>
    </div>
</div>
@endsection