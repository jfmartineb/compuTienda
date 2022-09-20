@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

<div class="container">
    <div class="overview-section p-4">
        <div class="row overview-section-title">
            <h4>Products Overview</h4>
            <p class="small text-grey">Check <span class="text-blue">transactions</span> history for detailed overview
                of your spendings</p>
        </div>
        <div class="row overview-section-list gy-4">

            <div class="container my-5">
                <div class="shadow-4 rounded-5 overflow-hidden">
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                                <th>Name</th>
                                <th>description</th>
                                <th>category</th>
                                <th>brand</th>
                                <th>group</th>
                                <th>price</th>
                                <th>stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($viewData["products"] as $product)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                            style="width: 45px; height: 45px" class="rounded-circle" />
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">{{ $product->getName() }}</p>
                                            <p class="text-muted mb-0">john.doe@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $product->getDescription() }}</td>
                                <td>
                                    <p class="fw-bold mb-1">{{ $product->getCategory() }}</p>
                                </td>
                                <td>{{ $product->getBrand() }}</td>
                                <td>{{ $product->getGroup() }}</td>
                                <td>{{ $product->getPrice() }}</td>
                                <td>{{ $product->getStock() }}</td>
                                <td>
                                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                                        delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection