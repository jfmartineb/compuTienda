@extends('layouts.app')
@section('title', $viewData["title"]) 
@section('subtitle', $viewData["subtitle"]) 
@section('content') 
<div class="container py-5" style = "margin-top: 104px;">
    <div class="card"> 
        <div class="card-header"> {{ __('cart.productsInCart') }} </div> 
        <div class="card-body"> 
            <table class="table table-bordered table-striped text-center"> 
                <thead> 
                    <tr> 
                        <th scope="col">{{ __('cart.id') }}</th> 
                        <th scope="col">{{ __('cart.name') }}</th>
                        <th scope="col">{{ __('cart.price') }}</th> 
                        <th scope="col">{{ __('cart.quantity') }}</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach ($viewData["products"] as $product) 
                    <tr> 
                        <td>{{ $product->getId() }}</td> 
                        <td>{{ $product->getName() }}</td> 
                        <td>${{ $product->getPrice() }}</td> 
                        <td>{{ session('products')[$product->getId()] }}</td> 
                    </tr>
                    @endforeach 
                </tbody> 
            </table> 
            <div class="row"> 
                <div class="text-end"> 
                    <a class="btn btn-outline-secondary mb-2"><b>{{ __('cart.total') }}</b> ${{ $viewData["total"] }}</a> 
                    @if (count($viewData["products"]) > 0) 
                    <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">{{ __('cart.purchase') }}</a>
                    <a href="{{ route('cart.delete') }}"> 
                        <button class="btn btn-danger mb-2">{{ __('cart.removeAll') }}</button> 
                    </a>
                    @endif 
                </div> 
            </div> 
        </div> 
    </div> 
</div>
@endsection