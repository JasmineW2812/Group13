@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customer Manage Profile</title>
    </head>
    <header>
        <h1>Update details</h1>
        <div class="header-icons"><a href="{{ route('notification') }}"><i class="fa-regular fa-bell"></i></a>
            <i class="fa-regular fa-user header-icons"></i>
        </div>
    </header>
    <body>
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="p-4 bg-light border rounded shadow mt-4">
                <form method="POST" action="{{ route('customerManageProfile') }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="first_name" placeholder="Change your first name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="last_name" placeholder="Change your last name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-4">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-4">
                            <input type="tel" class="form-control" name="phone_number" placeholder="Change your phone number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-4">
                            <input type="password" class="form-control" name="password" placeholder="Old Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-4">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="New Password" required>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-size mt-4" type="submit">Update</button>
                </form>
            </div>
        </div>
    </body>
    </html>
@endsection
