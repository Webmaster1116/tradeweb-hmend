@extends('layouts.default')
<link rel="stylesheet" href="assets/css/home.css" />
<link rel="stylesheet" href="assets/css/list.css" />
<link rel="stylesheet" href="assets/css/auth.css" />
@section('content')
<section id="login">
    <div class="container">

        <div class="login-img">
            <img src="{{ asset('assets/img/auth/login.png') }}" />
        </div>
        <div class="login-form">
            <div>
                <div class="title">Sign in</div>
            </div>
            <form method="POST" action="{{ route('login.custom') }}">
                @csrf
                <div class="login-input">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group has-feedback has-search has-full-input">
                        <span class="fa fa-envelope form-control-feedback"></span>
                        <input
                            type="email"
                            class="form-control signin-input"
                            placeholder="Email Address"
                            name="email"
                            required
                            autofocus
                        />
                    </div>
                    <div class="form-group has-feedback has-search has-full-input">
                        <span class="fa fa-lock form-control-feedback"></span>
                        <input
                            class="form-control signin-input"
                            type="password"
                            class="form-control"
                            placeholder="Password"
                            name="password"
                            required
                        />
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <a class="reset-password" href="/forgot-password"
                                >Forgot your password?</a
                            >
                        </div>
                    </div>
                </div>
                <div class="login-btn-group">
                    <div>
                        <button type="submit" class="orange-btn login-btn">
                            Sign in
                        </button>
                    </div>
                    <div class="social-login">
                        <img src="{{ asset('assets/img/auth/facebook.svg') }}" />
                        <div>Continue with Facebook</div>
                    </div>
                </div>
                <div class="login-register">
                    <span>Are you a new user?</span>
                    <a href="register">Register here</a>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
