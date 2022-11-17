@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
@forelse ($viewData["orders"] as $order)
<div class="container py-5" style = "margin-top: 104px;">
    <div class="card mb-4">
        <div class="card-header">
        {{ __('account.order') }} #{{ $order->getId() }}
        </div>
        <div class="card-body">
            <b>{{ __('account.date') }}:</b> {{ $order->getCreatedAt() }}<br />
            <b>{{ __('account.total') }}:</b> ${{ $order->getTotal() }}<br />
            <table class="table table-bordered table-striped text-center mt-3">
                <thead>
                    <tr>
                        <th scope="col">{{ __('account.itemId') }}</th>
                        <th scope="col">{{ __('account.productName') }}</th>
                        <th scope="col">{{ __('account.price') }}</th>
                        <th scope="col">{{ __('account.quantity') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->getItems() as $item)
                    <tr>
                        <td>{{ $item->getId() }}</td>
                        <td>
                            <a class="link-success" href="{{ route('product.show', ['id'=> $item->getProduct()->getId()])}}">
                                {{ $item->getProduct()->getName() }}
                            </a>
                        </td>
                        <td>${{ $item->getPrice() }}</td>
                        <td>{{ $item->getQuantity() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @empty
    <div class="alert alert-danger" role="alert">
    {{ __('account.error') }}
    </div>
</div>
@endforelse
@endsection