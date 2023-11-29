@extends('layouts.main')
@section('title')
    Register
@endsection
@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-4 mb-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('errors') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <main class="form-signin border p-4 rounded bg-light">
                    <h1 class="h3 mb-3 fw-bold text-center">Form Register</h1>
                    <form action="/register_user" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="name" name="name" class="form-control" id="name" placeholder="Name"
                                required>
                            <label for="name">Name</label>
                        </div> <br>

                        <div class="form-floating">
                            <input type="username" name="username" class="form-control" id="username"
                                placeholder="Username" required>
                            <label for="username">Username</label>
                        </div> <br>

                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Email Address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> <br>

                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>
                    </form>
                    <small class="d-block text-center mt-3 mb-4">Sudah punya akun? <a href="/login">Login
                            Sekarang!</a></small>
                </main>
            </div>
        </div>
    </div>
@endsection
