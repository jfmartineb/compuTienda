@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
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
                <h2>Register Now!</h2>
                <form class="register-form" method="POST" action="{{ route('admin.product.store') }}">
                    @csrf
                    <div class = "form-item-list">
                        <!-- item -->
                        <div class="form-item">
                            <label for="name">Product Name</label>
                            <div class="form-group">
                                <span><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="name" placeholder="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <!-- end of item -->
                        <!-- item -->
                        <div class="form-item">
                            <label for="descrption">Product descrption</label>
                            <div class="form-group">
                                <span><i class="fas fa-user"></i></span>
                                <textarea name="description" id="description" rows="3">"{{ old('descrption') }}"</textarea>
                            </div>
                        </div>
                        <!-- end of item -->
                        <!-- item -->
                        <div class="form-item">
                            <label for="category">Product category</label>
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example" name="category" value="{{ old('category') }}">
                                    <option selected>Car type</option>
                                    <option value="computers">Computers</option>
                                    <option value="accsesories">Accsesories</option>
                                </select>
                            </div>
                        </div>
                        <!-- end of item -->
                        <!-- item -->
                        <div class="form-item">
                            <label for="brand">Product brand</label>
                            <div class="form-group">
                                <span><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="brand" placeholder="brand" value="{{ old('brand') }}">
                            </div>
                        </div>
                        <!-- end of item -->
                        <!-- item -->
                        <div class="form-item">
                            <label for="group">Product group</label>
                            <div class="form-group">
                                <span><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="group" placeholder="group" value="{{ old('group') }}">
                            </div>
                        </div>
                        <!-- end of item -->
                        <!-- item -->
                        <div class="form-item">
                            <label for="price">Product price</label>
                            <div class="form-group">
                                <span><i class="fas fa-user"></i></span>
                                <input type="number" class="form-control" id="price" placeholder="$$$" value="{{ old('price') }}">
                            </div>
                        </div>
                        <!-- end of item -->
                        div class="form-item">
                            <label for="stock">Product stock</label>
                            <div class="form-group">
                                <span><i class="fas fa-user"></i></span>
                                <input type="number" class="form-control" id="stock" placeholder="stock" value="{{ old('stock') }}">
                            </div>
                        </div>
                        <!-- end of item -->
                    </div>

                    <span class="submission-status">
                        <!-- text here -->
                    </span>

                    <button type="submit" id="submit-btn">
                        register product
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </button>
                </form>
            </div>
            <!-- end of col left -->
        </div>
    </div>


@endsection