@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

<div class="card mb-4">
    <div class="card-header">
        Create Users
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
</div>

<div class="card">
    <div class="card-header">
        Manage Users
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["users"] as $user)
                <tr>
                    <td>{{ $user->getId() }}</td>
                    <td>{{ $user->getName() }}</td>
                    <td>{{ $user->getEmail() }}</td>
                    <td>{{ $user->getRole() }}</td>
                    <td>{{ $user->getBalance() }}</td>
                    <td>{{ $user->getCreatedAt() }}</td>
                    <td>
                        <a class="btn btn-primary" href="#">Edit</a>
                            <i class="bi-pencil"></i>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="#">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection