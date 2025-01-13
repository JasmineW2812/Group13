@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h1>Login to Your Account</h1>
        </header>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
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
            <form method="POST" action="{{ route('customerLogin') }}">
                @csrf

                <div class="row mt-4">
                    <div class="col">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <input type="checkbox" name="remember"> Remember Me
                    </div>
                </div>

                <button class="btn btn-primary mt-4" type="submit">Login</button>
            </form>

            <div class="mt-3">
                <p>Don't have an account? <a href="{{ route('customer-sign-up') }}">Sign up</a></p>
            </div>
        </div>
    </div>
@endsection
