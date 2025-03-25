@extends('layouts.app')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner d-flex justify-content-center">
            <!-- Login Card -->
            <div class="card" style="max-width: 450px; width: 100%;">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-4 text-center">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <!-- Your SVG logo here -->
                                <svg width="25" viewBox="0 0 25 42" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- SVG content here -->
                                </svg>
                            </span>
                            <span class="app-brand-text demo text-body fw-bolder">Log In</span>
                        </a>
                    </div>
                    <!-- /Logo -->

                    <h4 class="mb-3 text-center">Welcome to Sneat! 👋</h4>
                    <p class="mb-4 text-center">Please sign in to your account and start the adventure.</p>

                    <!-- Login Form -->
                    <form id="formAuthentication" action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                                <a href="{{ route('password.request') }}">
                                    <small>Forgot Password?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required>

                                <span class="input-group-text cursor-pointer">
                                    <i class="bx bx-hide"></i>
                                </span>
                            </div>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember-me">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <button class="btn btn-primary d-grid w-100" type="submit">Sign In</button>
                        </div>
                    </form>

                    <p class="text-center">
                        <span>New on our platform?</span>
                        <a href="{{ route('register') }}">
                            <span>Create an account</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Login Card -->
        </div>
    </div>
</div>
@endsection
