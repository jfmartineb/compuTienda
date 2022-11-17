@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container py-5" style = "margin-top: 104px;">
    <div class = "title text-center">
        <h2 class = "position-relative d-inline-block">{{__('home.homeAboutUs')}}</h2>
    </div>
    <div class = "row g-0">
        <div class = "mt-4 row gx-0 gy-3">
        <p class = "text-capitalize my-1">{{__('home.homeLong')}}</p>
        </div>
    </div>
</div>

@endsection
